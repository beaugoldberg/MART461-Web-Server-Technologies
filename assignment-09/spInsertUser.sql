USE [EsportsProject]
GO

/****** Object:  StoredProcedure [dbo].[spInsertUser]    Script Date: 10/19/2020 9:49:27 PM ******/
SET ANSI_NULLS ON
GO

SET QUOTED_IDENTIFIER ON
GO

-- =============================================
-- Author:		<Author,,Name>
-- Create date: <Create Date,,>
-- Description:	<Description,,>
-- =============================================
CREATE PROCEDURE [dbo].[spInsertUser]
	-- Add the parameters for the stored procedure here
	@firstName as varchar(50),
	@lastName as varchar(50),
	@userName as varchar(50),
	@password as varchar(50),
	@gamerTag as varchar(50),
	@phone as varchar(50),
	@subscribed as bit,
	@admin as bit
AS
BEGIN
	-- SET NOCOUNT ON added to prevent extra result sets from
	-- interfering with SELECT statements.
	SET NOCOUNT ON;

    -- Insert statements for procedure here
	INSERT INTO [users] ([firstName], [lastName], [username], [pwd], [gamertag], [phoneNum], [subscribedchk], [adminchk])
	VALUES (@firstName, @lastName, @userName, @password, @gamerTag, @phone, @subscribed, @admin)
END
GO


                                      