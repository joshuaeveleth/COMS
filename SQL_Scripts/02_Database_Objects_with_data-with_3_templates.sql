/****** Script for SelectTopNRows command from SSMS  ******/
SELECT TOP 1000 [query]
      ,[timestamp]
      ,[Date_Entered]
      ,[sessionid]
      ,[username]
  FROM [COMS_TEST_3].[dbo].[COMS_Queries]
  
  WHERE username = 'dbitpro\louis.ferrucci'
  order by timestamp desc