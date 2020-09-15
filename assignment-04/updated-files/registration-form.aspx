<%@ Page Language="C#" AutoEventWireup="true" CodeBehind="registration-form.aspx.cs" Inherits="esports_registration.WebForm1" %>

<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <link rel="stylesheet" type="text/css" href="esports.css" />
    <meta charset="utf-8" />
    <title>Griz Esports Registration</title>
</head>
<body>

    <h1>Esports Registration Form</h1>
    <br />
    Full Name:<br />
    <asp:TextBox ID="txtName" runat="server" cssclass="textboxstyle">ex. John Doe</asp:TextBox><br />
    Email:<br />
    <asp:TextBox ID="txtEmail" runat="server" cssclass="textboxstyle">ex. username@gmail.com</asp:TextBox><br />
    Address:<br />
    <asp:TextBox ID="txtAddress" runat="server" cssclass="textboxstyle">ex. 315 Sunny Street</asp:TextBox>
    <select id="state" name="D1">
        <option>Alabama</option>
        <option>Alaska</option>
        <option>Arizona</option>
        <option>Arkansas</option>
        <option>California</option>
        <option>Colorado</option>
        <option>Connecticut</option>
        <option>Delaware</option>
        <option>Florida</option>
        <option>Georgia</option>
        <option>Hawaii</option>
        <option>Idaho</option>
        <option>Illinois</option>
        <option>Indiana</option>
        <option>Iowa</option>
        <option>Kansas</option>
        <option>Kentucky</option>
        <option>Louisiana</option>
        <option>Maine</option>
        <option>Maryland</option>
        <option>Massachussetts</option>
        <option>Michigan</option>
        <option>Minnesota</option>
        <option>Mississippi</option>
        <option>Missouri</option>
        <option>Montana</option>
        <option>Nebraska</option>
        <option>Nevada</option>
        <option>New Hampshire</option>
        <option>New Jersey</option>
        <option>New Mexico</option>
        <option>New York</option>
        <option>North Carolina</option>
        <option>North Dakota</option>
        <option>Ohio</option>
        <option>Oklahoma</option>
        <option>Oregon</option>
        <option>Pennsylvania</option>
        <option>Rhode Island</option>
        <option>South Carolina</option>
        <option>South Dakota</option>
        <option>Tennessee</option>
        <option>Texas</option>
        <option>Utah</option>
        <option>Vermont</option>
        <option>Virginia</option>
        <option>Washington</option>
        <option>West Virginia</option>
        <option>Winsconsin</option>
        <option>Wyoming</option>
    </select>
    <asp:TextBox ID="zipCode" runat="server" Width="86px">ex. 59860</asp:TextBox><br />
    Phone Number:<br />
    <asp:TextBox ID="txtPhoneNum" runat="server" cssclass="textboxstyle">ex. (410)123-4567</asp:TextBox><br />
    Gamer Tag:<br />
    <asp:TextBox ID="txtGamertag" runat="server" cssclass="textboxstyle">ex. username123</asp:TextBox><br />
    Password:<br />
    <input id="Password1" type="password" value="ex. password" /><br />
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
    <asp:CheckBox ID="studentCode" runat="server" Text="Do you accept the student code of conduct?" ForeColor="Black" /><br />
    <br />
    <asp:Button ID="Button1" runat="server" Text="Sumbit Form" OnClick="btnSubmit_Click" cssclass="buttonstyle" />
    <br />
    <br />
    <asp:Button ID="Button2" runat="server" Text="Show User Data" OnClick="btnGet_Click" cssclass="buttonstyle" />
</body>
</html>
