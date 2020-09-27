USE [EsportsProject]
GO

/****** Object:  Table [dbo].[addresses]    Script Date: 9/26/2020 11:18:54 PM ******/
SET ANSI_NULLS ON
GO

SET QUOTED_IDENTIFIER ON
GO

CREATE TABLE [dbo].[addresses](
	[addressID] [int] IDENTITY(1,1) NOT NULL,
	[address1] [varchar](50) NULL,
	[address2] [varchar](50) NULL,
	[city] [varchar](50) NULL,
	[stateID] [int] NULL,
	[zipcode] [varchar](5) NULL
) ON [PRIMARY]
GO


