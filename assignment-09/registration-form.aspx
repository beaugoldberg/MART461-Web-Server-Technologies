<%@ Page Language="C#" AutoEventWireup="true" CodeBehind="registration-form.aspx.cs" Inherits="esports_registration.WebForm1" %>

<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <link rel="stylesheet" type="text/css" href="esports.css" />
    <meta charset="utf-8" />
    <title>Griz Esports Registration</title>
</head>
<body>
    <form id="regform" runat="server">
        <br />
        <h1>Esports Registration Form</h1>
            <asp:GridView ID="gvUsers" runat="server"></asp:GridView>
            <asp:Label ID="fullName" runat="server" Text="Full Name:" CssClass="label"></asp:Label><br />
            <asp:TextBox ID="txtName" runat="server" CssClass="textboxstyle"></asp:TextBox>
            <asp:RequiredFieldValidator ID="nameValidator1" runat="server" ControlToValidate="txtName" ErrorMessage="*Required" ForeColor="Red"></asp:RequiredFieldValidator>
            <br />
            <br />
            <asp:Label ID="email" runat="server" Text="Email:" CssClass="label"></asp:Label><br />
            <asp:TextBox ID="txtEmail" runat="server" CssClass="textboxstyle"></asp:TextBox>
            <asp:RequiredFieldValidator ID="emailValidator0" runat="server" ControltoValidate="txtEmail" ErrorMessage="*Required " ForeColor="Red"></asp:RequiredFieldValidator>
            <asp:RegularExpressionValidator ID="emailExpressionValidator0" runat="server" ControlToValidate="txtEmail" ErrorMessage="*Incorrect Format" ForeColor="Red" ValidationExpression="\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*"></asp:RegularExpressionValidator>
            <br />
            <br />
            <asp:Label ID="address" runat="server" Text="Address:" CssClass="label"></asp:Label><br />
            <asp:TextBox ID="txtAddress" runat="server" CssClass="textboxstyle"></asp:TextBox>
            <select id="state" name="D2">
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
            </select><asp:TextBox ID="zipCode" runat="server" Width="86px"></asp:TextBox>
            <br />
            <br />
            <asp:Label ID="phoneNumber" runat="server" Text="Phone Number:" CssClass="label"></asp:Label><br />
            <asp:TextBox ID="txtPhoneNum" runat="server" CssClass="textboxstyle"></asp:TextBox>
            <asp:RegularExpressionValidator ID="phoneValidator" runat="server" ErrorMessage="*Incorrect Format" ControlToValidate="txtPhoneNum" ForeColor="Red" ValidationExpression="((\(\d{3}\) ?)|(\d{3}-))?\d{3}-\d{4}"></asp:RegularExpressionValidator>
            <br />
            <br />
            <asp:Label ID="gamertag" runat="server" Text="GamerTag:" CssClass="label"></asp:Label><br />
            <asp:TextBox ID="txtGamertag" runat="server" CssClass="textboxstyle" ></asp:TextBox>
            <br />
            <br />
            <asp:Label ID="password" runat="server" Text="Password:" CssClass="label"></asp:Label><br />
            &nbsp;&nbsp;&nbsp; <input id="Password" type="password"/>
            <br />
            <br />
            <asp:Label ID="gamesMenu" runat="server" Text="Games That Apply:" CssClass="label"></asp:Label><br />
            <asp:CheckBox ID="chkValorant" runat="server" Text="Valorant " CssClass="checkboxstyle"/>
            <br />
            <asp:CheckBox ID="chkCOD" runat="server" Text="COD: Modern Warfare " CssClass="checkboxstyle" />
            <br />
            <asp:CheckBox ID="chkApex" runat="server" Text="Apex Legends " CssClass="checkboxstyle"/>
            <br />
            <asp:CheckBox ID="chkSmash" runat="server" Text="Super Smash Bros. " CssClass="checkboxstyle"/>
            <br />
            <asp:CheckBox ID="chkFortnite" runat="server" Text="Fortnite " CssClass="checkboxstyle"/>
            <br />
            <asp:CheckBox ID="chkRogue" runat="server" Text="Rogue Company " CssClass="checkboxstyle"/>
            <br />
            <asp:CheckBox ID="chkLeague" runat="server" Text="League of Legends " CssClass="checkboxstyle"/>
            <br />
            <asp:CheckBox ID="chkOther" runat="server" Text="Other " CssClass="checkboxstyle"/>
            <br />
            <asp:TextBox ID="txtGameOther" runat="server" CssClass="textboxstyle" ></asp:TextBox>
            <br />
            <br />
            <asp:CheckBox ID="studentCode" runat="server" Text="Do you accept the student code of conduct?" CssClass="checkboxstyle"/>
            <br />
            <br />
            <asp:Button ID="SubmitButton" runat="server" CssClass="buttonstyle" OnClick="btnSubmit_Click" Text="Sumbit Form" />
            <br />
            <br />
            <asp:Button ID="DisplayButton" runat="server" CssClass="buttonstyle" OnClick="btnGet_Click" Text="Show User Data" />
            <br />
        <br />
    </form>
</body>
</html>
