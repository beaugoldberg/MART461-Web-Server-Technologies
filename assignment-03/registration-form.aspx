<%@ Page Language="C#" AutoEventWireup="true" CodeBehind="registration-form.aspx.cs" Inherits="esports_registration.WebForm1" %>

<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
<meta charset="utf-8" />
    <title>Griz Esports Registration</title>
</head>
<body>
    <form id="form1" runat="server">
        <div style="font-family: Verdana, Geneva, Tahoma, sans-serif; color: #FF0000; font-weight: bold">
            <fieldset>
                <legend>Registration Form</legend>
                <br />
                Full Name:<br />
                <asp:TextBox ID="txtName" runat="server"></asp:TextBox><br />
                Email:<br />
                <asp:TextBox ID="txtEmail" runat="server"></asp:TextBox><br />
                Address:<br />
                <asp:TextBox ID="txtAddress" runat="server"></asp:TextBox><br />
                Phone Number:<br />
                <asp:TextBox ID="txtPhoneNum" runat="server"></asp:TextBox><br />
                Gamer Tag:<br />
                <asp:TextBox ID="txtGamertag" runat="server"></asp:TextBox><br />
                <br />
                Games (Check all that apply):<br />
                <asp:CheckBox ID="chkValorant" runat="server" Text="Valorant " ForeColor="Black" /><br />
                <asp:CheckBox ID="chkCOD" runat="server" Text="COD: Modern Warfare " ForeColor="Black" /><br />
                <asp:CheckBox ID="chkApex" runat="server" Text="Apex Legends " ForeColor="Black" /><br />
                <asp:CheckBox ID="chkSmash" runat="server" Text="Super Smash Bros. " ForeColor="Black" /><br />
                <asp:CheckBox ID="chkFortnite" runat="server" Text="Fortnite " ForeColor="Black" /><br />
                <asp:CheckBox ID="chkRogue" runat="server" Text="Rogue Company " ForeColor="Black" /><br />
                <asp:CheckBox ID="chkLeague" runat="server" Text="League of Legends " ForeColor="Black" /><br />
                <asp:CheckBox ID="chkOther" runat="server" Text="Other " ForeColor="Black" /><br />
                <asp:TextBox ID="txtGameOther" runat="server"></asp:TextBox><br />
                <br />
                <br />
                <asp:Button ID="Button1" runat="server" Text="Sumbit Form" OnClick="btnSubmit_Click" ForeColor="Black" Height="35px" Style="margin-top: 0px" Width="129px" />
            </fieldset>
        </div>
    </form>
</body>
</html>
