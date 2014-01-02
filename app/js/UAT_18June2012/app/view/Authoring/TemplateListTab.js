Ext.define('COMS.view.Authoring.TemplateListTab', {
    extend: 'Ext.grid.Panel',
    title: 'List of Active Templates',
    header: false,
    alias: 'widget.TemplateListTab',
    height: 'auto',
    margin: '10',
    resizable: true,
    bodyStyle: 'padding:5px',
    autoScroll : true,
    store: "TemplateListStore",
    columns: [
        { text: 'Template Name', dataIndex: 'name' },
        { text: 'Description', dataIndex: 'description', flex: 1 },
        { text: 'Disease Type', dataIndex: 'DiseaseName' },
        { text: '', dataIndex: 'id', renderer: function(value) {
            var buf = '<a href="' + Ext.URLs.PrintTemplate + '/' + value + '" target="print_template">View/Print</a>';
            return buf;
            // Ext.String.format('<a href="' + Ext.URLs.PrintTemplate + '/{1}" target="print_template">View/Print</a>', value);
        } }
    ]
});