USE [EsportsProject]
GO

/****** Object:  Table [dbo].[games]    Script Date: 9/26/2020 11:19:04 PM ******/
SET ANSI_NULLS ON
GO

SET QUOTED_IDENTIFIER ON
GO

CREATE TABLE [dbo].[games](
	[gameID] [int] IDENTITY(1,1) NOT NULL,
	[gameName] [varchar](50) NULL
) ON [PRIMARY]
GO


