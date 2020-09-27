USE [EsportsProject]
GO

/****** Object:  Table [dbo].[users]    Script Date: 9/26/2020 11:19:20 PM ******/
SET ANSI_NULLS ON
GO

SET QUOTED_IDENTIFIER ON
GO

CREATE TABLE [dbo].[users](
	[userID] [int] IDENTITY(1,1) NOT NULL,
	[firstName] [varchar](50) NULL,
	[lastName] [varchar](50) NULL,
	[username] [varchar](50) NULL,
	[pwd] [varbinary](50) NULL,
	[gamertag] [varchar](50) NULL,
	[phoneNum] [varchar](50) NULL,
	[subscribedchk] [int] NULL,
	[adminchk] [int] NULL
) ON [PRIMARY]
GO


