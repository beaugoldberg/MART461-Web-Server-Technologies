<%@ Page Language="C#" AutoEventWireup="true" CodeBehind="login-form.aspx.cs" Inherits="esports_registration.WebForm2" %>

<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
<meta charset="utf-8" />
    <title>Griz Esports Login Page</title>    
</head>
<body>
    <form id="form1" runat="server">   
        <div style="font-family: Verdana, Geneva, Tahoma, sans-serif; color: #FF0000; font-weight: bold">
            <fieldset>
                <legend>Login</legend>
                <br />
                Username:<br /> <asp:TextBox ID="txtUsername" runat="server"></asp:TextBox><br />
                Password:<br /> <asp:TextBox ID="txtPassword" runat="server"></asp:TextBox><br /><br />
                <asp:Button ID="Button1" runat="server" Text="Sign In" OnClick="btnSubmit_Click" ForeColor="Black" Height="35px" Style="margin-top: 0px" Width="129px" />
                <br /><br />
                <asp:Button ID="Button2" runat="server" Text="Display Info" OnClick="btnGet_Click" ForeColor="Black" Height="35px" Style="margin-top: 0px" Width="129px" />
            </fieldset>
        </div>
    </form>
</body>
</html>
