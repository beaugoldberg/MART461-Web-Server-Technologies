USE [EsportsProject]
GO

/****** Object:  Table [dbo].[states]    Script Date: 9/26/2020 11:19:15 PM ******/
SET ANSI_NULLS ON
GO

SET QUOTED_IDENTIFIER ON
GO

CREATE TABLE [dbo].[states](
	[stateID] [int] IDENTITY(1,1) NOT NULL,
	[stateName] [varchar](50) NULL,
	[stateAbbr] [varchar](3) NULL
) ON [PRIMARY]
GO


