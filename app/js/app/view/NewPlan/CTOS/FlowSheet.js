Ext.define("COMS.view.NewPlan.CTOS.FlowSheet" ,{
	extend : "Ext.container.Container",
	alias : "widget.FlowSheet",
	name : "Flow Sheet Tab",
	title : "Flowsheet",

	padding : "10",
	items : [
		{ xtype : "NursingDocs_Chemotherapy", cls : "Level1" },
		{ xtype : "container", name : "flowsheet grid" }		// Grid is built on the fly in the 
																// app\controller\NewPlan\CTOS\FlowSheetTab.js createFlowsheet() 
																// (Search for: theGrid = Ext.create)
	],

	initComponent: function() {
		wccConsoleLog("Flow Sheet Tab View - Initialization");
		this.callParent(arguments);
	}
});