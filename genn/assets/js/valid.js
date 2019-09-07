// JavaScript Document
function CreateAjax()
{
var xmlHttp=null;
try
 {
 // Firefox, Opera 8.0+, Safari
 xmlHttp=new XMLHttpRequest();
 }
catch (e)
 {
 // Internet Explorer
 try
  {
  xmlHttp=new ActiveXObject("Msxml2.XMLHTTP");
  }
 catch (e)
  {
  xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
 }
return xmlHttp;
}




function validNumber()
{
  e=event.keyCode;
  if (!((e>=48 && e<=57) || e==32 || e==44 || e==45))
  {
      event.keyCode=0;
  }
}
function chkUserForm()
{	
	var name = document.userform.name;
	var uname = document.userform.uname;
	var pwd = document.userform.password;
	var cpwd = document.userform.cnpassword;
	var em = document.userform.email;
	var mno = document.userform.contact;
	var city = document.userform.city;
	var addr = document.userform.address;
	var pcode = document.userform.pincode;
		if(name_validation(name))  
		{  
			if(isuser(uname))
			{
				if(pass_validation(pwd,cpwd))
				{
					if(ValidateEmail(em))  
					{
						if(ismno(mno))  
						{  
							if(iscity(city))  
							{ 
								if(isaddr(addr))  
								{ 
									if(isPin(pcode)) 
									{ 
										if(isblank(uname))  
										{  
										}
									}
								}
							}
						}
					}
				}
			}
		} 
		return false;	
}
function chkUserEdit()
{	
	var name = document.userform.name;
	var em = document.userform.email;
	var mno = document.userform.contact;
	var city = document.userform.city;
	var addr = document.userform.address;
	var pcode = document.userform.pincode;
		if(name_validation(name))  
		{  
			if(ValidateEmail(em))  
			{
				if(ismno(mno))  
				{  
					if(iscity(city))  
					{ 
						if(isaddr(addr))  
						{ 
							if(isPin(pcode)) 
							{ 
								if(isblank(uname))  
								{  
								}
							}
						}
					}
				}
			}
		} 
		return false;	
}
function chkCompForm()
{	
	var compname = document.compform.cname;
	var owname = document.compform.oname;
	var cusname = document.compform.cuname;
	var pwd = document.compform.cpassword;
	var cpwd = document.compform.ccnpassword;
	var em = document.compform.cemail;
	var mno = document.compform.ccontact;
	var city = document.compform.ccity;
	var addr = document.compform.caddress;
	var pcode = document.compform.cpincode;
		if(name_validation(compname))  
		{ 
			if(name_validation(owname))  
			{ 
				if(isuser(cusname))
				{
					if(pass_validation(pwd,cpwd))
					{
						if(ValidateEmail(em))  
						{
							if(ismno(mno))  
							{  
								if(iscity(city))  
								{ 
									if(isaddr(addr))  
									{ 
										if(isPin(pcode)) 
										{ 
											if(isblank(uname))  
											{  
											}
										}
									}
								}
							}
						}
					}
				}
			}
		}
		return false;	
}
function chkCompEdit()
{	
	var compname = document.compform.orgname;
	var owname = document.compform.ownername;
	var em = document.compform.email;
	var mno = document.compform.contact;
	var city = document.compform.city;
	var addr = document.compform.address;
	var pcode = document.compform.pincode;
		if(name_validation(compname))  
		{ 
			if(name_validation(owname))  
			{ 
				if(ValidateEmail(em))  
				{
					if(ismno(mno))  
					{  
						if(iscity(city))  
						{ 
							if(isaddr(addr))  
							{ 
								if(isPin(pcode)) 
								{ 
									if(isblank(uname))  
									{  
									}
								}
							}
						}
					}
				}
			}
		}
		return false;	
}
function chkProduct()
{
	var name=document.add.pname;
	var desc=document.add.pdesc;
	var price=document.add.pprice;
	if(isProduct(name))  
		{
			if(isPrice(price))  
			{	
				if(isDesc(desc))
				{
					if(isblank(name))  
					{  
					}
				}
			}
		}
		return false;
}
function name_validation(name)  
{   
		var uid_len = name.value.length; 
		if (uid_len == 0 || uid_len <= 5)  
		{  
			alert("Name should not be empty \n Length cannot be less than 6 characters!");  
			name.focus();  
			return false;  
		} 
		else
		{
			return true;
		}
}  
function isuser(uname)  
{  
	var let = /^[0-9a-zA-Z-.-_]+$/;  
		if(uname.value.match(let) && uname.value.length > 6)  
		{  
			return true;  
		}  
		else  
		{  
			alert('Please Enter Valid User Name!\nShould be more than 5 Letters');  
			uname.focus();  
			return false;  
		}  
} 
function pass_validation(pwd,cpwd)  
{  		
		var pass_len = pwd.value.length;  
			if(pwd.value == cpwd.value)
			{				
			if (pass_len == 0 || pass_len < 8)  
			{  
				alert("Password should not be empty \nShould be more than 7 letters!");  
				pwd.focus();  
				return false;  
			}
			}
			else
			{	alert("Both Password did not Match.");
				cpwd.focus();
				return false;
			}
			  return true;
}  
function ValidateEmail(em)  
{  
	var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;  
		if(em.value.match(mailformat))  
		{  
			return true;  
		}  
		else  
		{  
			alert("You have entered an invalid email address!");  
			em.focus();  
			return false;  
		}  
}
function ismno(mno)  
{   
	var numb = /^[0-9]+$/;  
		if(mno.value.match(numb) && mno.value.length == 10) 
		{  
			return true;  
		}  
		else  
		{  
			alert('Please enter valid contact number!');  
			mno.focus();  
			return false;  
		}  
}
function iscity(city)  
{  
	if(city.value == "default")  
	{  
		alert('Select your city from the list');  
		city.focus();  
		return false;  
	}  
	else  
	{  
		return true;  
	}  
} 
function isaddr(addr)  
{   
	
		if(addr.value.length != 0 && addr.value.length > 10)  
		{  
			return true;  
		}  
		else  
		{  
			alert('Please enter valid address!');  
			addr.focus();  
			return false;  
		}  
} 
function isPin(nb)  
{   
	var numbers = /^[0-9]+$/;  
		if(nb.value.match(numbers) && nb.value.length==6)  
		{  
			return true;  
		}  
		else  
		{  
			alert('Please enter valid pincode!');  
			nb.focus();  
			return false;  
		}  
}
function isProduct(name)  
{   
		var uid_len = name.value.length; 
		if (uid_len == 0 || uid_len <= 5)  
		{  
			alert("Product Name should not be empty \nLength cannot be less than 6 characters!");  
			name.focus();  
			return false;  
		} 
		else
		{
			return true;
		}
}  
function isDesc(desc)  
{   
	
		if(desc.value.length != 0 && desc.value.length > 20)  
		{  
			return true;  
		}  
		else  
		{  
			alert('Please enter valid product description!');  
			desc.focus();  
			return false;  
		}  
} 
function isPrice(nb)  
{   
	var numbers = /^[0-9]+$/;  
		if(nb.value.match(numbers) && nb.value.length!=0)  
		{  
			return true;  
		}  
		else  
		{  
			alert('Please enter valid product price!');  
			nb.focus();  
			return false;  
		}  
}

function trover(obj)
{
    obj.style.cursor="pointer";
    obj.style.background="url(IMG/back.gif) ";
}
function trout(obj)
{
    obj.style.background="inherit";
}
function trclick(objid)
{
    window.location="aucdet.php?item="+objid;
}
function showpass(p)
{
 window.open("showpass.php?pass="+p,"","toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=yes,resizable=no,width=500,height=200");
}
