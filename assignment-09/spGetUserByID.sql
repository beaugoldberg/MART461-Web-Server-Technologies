USE [EsportsProject]
GO

/****** Object:  StoredProcedure [dbo].[spGetUserByUserID]    Script Date: 10/19/2020 9:49:21 PM ******/
SET ANSI_NULLS ON
GO

SET QUOTED_IDENTIFIER ON
GO

-- =============================================
-- Author:		<Author,,Name>
-- Create date: <Create Date,,>
-- Description:	<Description,,>
-- =============================================
CREATE PROCEDURE [dbo].[spGetUserByUserID]
	-- Add the parameters for the stored procedure here
	@userID as int
AS
BEGIN
	-- SET NOCOUNT ON added to prevent extra result sets from
	-- interfering with SELECT statements.
	SET NOCOUNT ON;

    -- Insert statements for procedure here
	SELECT * FROM users WHERE userID = @userID;
END
GO


