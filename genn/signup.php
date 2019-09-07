<?php
	session_start();
	if(isset($_SESSION['uid']))
	{
		echo "<script>window.location='index.php';</script>";
	}
	include_once("connect.php");
	if(isset($_POST['reguser']))
	{	
		
		$u=$_POST['uname'];
		$rs=mysql_query("select * from user where u_username='$u'");
		$rsc=mysql_query("select * from company where c_username='$u'");
		$rsa=mysql_query("select * from admin where admin_name='$u'");
			if(mysql_num_rows($rs)>0 || mysql_num_rows($rsc)>0 || mysql_num_rows($rsa)>0)
			{
				echo "<script>
				alert('Username already exist!\\nPlease Change it.');
				document.userform.uname.focus();
				</script>";
			}
			else
			{

			$q="insert into user(u_name,u_username,u_password,u_email,u_mno,u_city,u_address,u_pcode) values('".$_POST['name']."','".$_POST['uname']."','".$_POST['password']."','".$_POST['email']."',".$_POST['contact'].",'".$_POST['city']."','".$_POST['address']."',".$_POST['pincode'].")";
				if(mysql_query($q))
				{
					echo "<script>
		alert('Congratulations !, Your account is created Successfully.\\nClick ok to login');
		window.location='signin.php';
		</script>";
				}
			}
	}
	if(isset($_POST['regcompany']))
	{	
		$u=$_POST['cuname'];
		$rs=mysql_query("select * from user where u_username='$u'");
		$rsc=mysql_query("select * from company where c_username='$u'");
			if(mysql_num_rows($rs)>0 || mysql_num_rows($rsc)>0)
			{
				echo "<script>
				alert('Username already exist...Please Change it.');
				document.userform.uname.focus();
				</script>";
			}
			else
			{
				
			$q="insert into company(org_name,owner_name,c_username,c_password,c_email,c_mno,c_city,c_address,c_pcode,c_icon) values('".$_POST['cname']."','".$_POST['oname']."','".$_POST['cuname']."','".$_POST['cpassword']."','".$_POST['cemail']."',".$_POST['ccontact'].",'".$_POST['ccity']."','".$_POST['caddress']."',".$_POST['cpincode'].",'".$_FILES['clogo']['name']."')";
		
				if(mysql_query($q))
				{
					echo "<script>
		alert('Congratulations !, Your account is created Successfully.\\nClick ok to login');
		window.location='signin.php';
		</script>";
				}
			}
	}
	
?>

<!DOCTYPE html>
<html lang="en">
<head>

</head>
<body>
	
	<div class="wrapper">
	<?php
	include_once("include/visitorh.php");
	?>
		<!-- ============================================================= TOP NAVIGATION ============================================================= -->

<!-- ============================================================= HEADER : END ============================================================= -->	
<!-- ========================================= MAIN ========================================= -->
<main id="authentication" class="inner-bottom-md">
	<div class="container">
		<div class="row">
			
			<!-- /.col -->

			<div class="col-md-6" >
				<section class="section sign-in inner-right-xs">
				<h2 class="bordered">Create New Account</h2>
					<p>Create your own gen-N account</p>
					
						
                            <label>Register As : </label>
							&nbsp; &nbsp;&nbsp; &nbsp;
                          <input type="radio" name="regas" id="co"  class="le-radio" value="commpany" onClick="checkType('block','none');">Company &nbsp; &nbsp;
                         <input type="radio" checked="checked" name="regas" id="us" class="le-radio" value="user" onClick="checkType('none','block');">User 
					<form role="form" class="register-form cf-style-1" name="compform" id="comform" style="display:none" method="post" enctype="multipart/form-data" onSubmit="return chkCompForm();">					<!-- /.field-row -->
						<div class="field-row">
                            <label>Comapny Name</label>
                            <input type="text" class="le-input" name="cname">
							<p>*minimum 6 characters</p>
                        </div><!-- /.field-row -->
						<div class="field-row">
                            <label>Owner Name</label>
                            <input type="text" class="le-input" name="oname">
							<p>*minimum 6 characters</p>
                        </div>
						<div class="field-row">
                            <label>Username</label>
                            <input type="text" class="le-input" name="cuname">
							<p>*minimum 6 characters</p>
                        </div>
						<div class="field-row">
                            <label>Password</label>
                            <input type="password" class="le-input" name="cpassword">
							<p>*minimum 8 characters</p>
                        </div>
						<div class="field-row">
                            <label>Confirm Password</label>
                            <input type="password" class="le-input" name="ccnpassword">
                        </div>
						<div class="field-row">
                            <label>Email</label>
                            <input type="text" class="le-input" name="cemail">
                        </div>
						<div class="field-row">
                            <label>Contact No.</label>
                            <input type="text" class="le-input" maxlength="10" name="ccontact">
                        </div>
						<div class="field-row">
                            <label>City</label>
							<select name="ccity">
                           <option value="default" label="Select City" selected class="le-select">Select City</option>';
				
											<option value="Aarani" id="Arani">
							Aarani						</option>';
											<option value="Abohar" id="Abohar">
							Abohar						</option>';
											<option value="Achalpur" id="Achalpur">
							Achalpur						</option>';
											<option value="Adilabad" id="Adilabad">
							Adilabad						</option>';
											<option value="Adityapur" id="Adityapur">
							Adityapur						</option>';
											<option value="Adoni" id="Adoni">
							Adoni						</option>';
											<option value="Agartala" id="Agartala">
							Agartala						</option>';
											<option value="Agra" id="Agra">
							Agra						</option>';
											<option value="Ahmedabad" id="Ahmedabad">
							Ahmedabad						</option>';
											<option value="Ahmednagar" id="Ahmednagar">
							Ahmednagar						</option>';
											<option value="Aizawl" id="Aizawl">
							Aizawl						</option>';
											<option value="Ajmer" id="Ajmer">
							Ajmer						</option>';
											<option value="Akola" id="Akola">
							Akola						</option>';
											<option value="Akot" id="Akot">
							Akot						</option>';
											<option value="Alappuzha" id="Alappuzha">
							Alappuzha						</option>';
											<option value="Aligarh" id="Aligarh">
							Aligarh						</option>';
											<option value="Alipurduar" id="Alipurduar">
							Alipurduar						</option>';
											<option value="Allahabad" id="Allahabad">
							Allahabad						</option>';
											<option value="Almora" id="Almora">
							Almora						</option>';
											<option value="Alwar" id="Alwar">
							Alwar						</option>';
											<option value="Amalapuram" id="Amalapuram">
							Amalapuram						</option>';
											<option value="Amalner" id="Amalner">
							Amalner						</option>';
											<option value="Ambajogai" id="Ambajogai">
							Ambajogai						</option>';
											<option value="Ambala" id="Ambala">
							Ambala						</option>';
											<option value="AmbalaSadar" id="AmbalaSadar">
							AmbalaSadar						</option>';
											<option value="Ambasamudram" id="Ambasamudram">
							Ambasamudram						</option>';
											<option value="Ambikapur" id="Ambikapur">
							Ambikapur						</option>';
											<option value="Ambur" id="Ambur">
							Ambur						</option>';
											<option value="Amravati" id="Amravati">
							Amravati						</option>';
											<option value="Amreli" id="Amreli">
							Amreli						</option>';
											<option value="Amritsar" id="Amritsar">
							Amritsar						</option>';
											<option value="Amroha" id="Amroha">
							Amroha						</option>';
											<option value="Anakapalle" id="Anakapalle">
							Anakapalle						</option>';
											<option value="Anand" id="Anand">
							Anand						</option>';
											<option value="Anantapur" id="Anantapur">
							Anantapur						</option>';
											<option value="Anantnag" id="Anantnag">
							Anantnag						</option>';
											<option value="Anjangaon" id="Anjangaon">
							Anjangaon						</option>';
											<option value="Anjar" id="Anjar">
							Anjar						</option>';
											<option value="Ankleshwar" id="Ankleshwar">
							Ankleshwar						</option>';
											<option value="Arakkonam" id="Arakkonam">
							Arakkonam						</option>';
											<option value="Arambag" id="Arambag">
							Arambag						</option>';
											<option value="Araria" id="Araria">
							Araria						</option>';
											<option value="Arcot" id="Arcot">
							Arcot						</option>';
											<option value="Arrah" id="Arrah">
							Arrah						</option>';
											<option value="Aruppukkottai" id="Aruppukkottai">
							Aruppukkottai						</option>';
											<option value="Asansol" id="Asansol">
							Asansol						</option>';
											<option value="Ashoknagar" id="Ashoknagar">
							Ashoknagar						</option>';
											<option value="AshoknagarKalyangarh" id="AshoknagarKalyangarh">
							AshoknagarKalyangarh						</option>';
											<option value="Attur" id="Attur">
							Attur						</option>';
											<option value="Auraiya" id="Auraiya">
							Auraiya						</option>';
											<option value="Aurangabad" id="Aurangabad">
							Aurangabad						</option>';
											<option value="Avaniapuram" id="Avaniapuram">
							Avaniapuram						</option>';
											<option value="Azamgarh" id="Azamgarh">
							Azamgarh						</option>';
											<option value="Badlapur" id="Badlapur">
							Badlapur						</option>';
											<option value="Bagaha" id="Bagaha">
							Bagaha						</option>';
											<option value="Bagalkot" id="Bagalkot">
							Bagalkot						</option>';
											<option value="Bagbera" id="Bagbera">
							Bagbera						</option>';
											<option value="Bahadurgarh" id="Bahadurgarh">
							Bahadurgarh						</option>';
											<option value="Baharampur" id="Baharampur">
							Baharampur						</option>';
											<option value="Baheri" id="Baheri">
							Baheri						</option>';
											<option value="Bahraich" id="Bahraich">
							Bahraich						</option>';
											<option value="Baidyabati" id="Baidyabati">
							Baidyabati						</option>';
											<option value="Balaghat" id="Balaghat">
							Balaghat						</option>';
											<option value="Balangir" id="Balangir">
							Balangir						</option>';
											<option value="Balasore" id="Balasore">
							Balasore						</option>';
											<option value="Ballarpur" id="Ballarpur">
							Ballarpur						</option>';
											<option value="Ballia" id="Ballia">
							Ballia						</option>';
											<option value="Bally" id="Bally">
							Bally						</option>';
											<option value="Balotra" id="Balotra">
							Balotra						</option>';
											<option value="Balrampur" id="Balrampur">
							Balrampur						</option>';
											<option value="Balurghat" id="Balurghat">
							Balurghat						</option>';
											<option value="Banda" id="Banda">
							Banda						</option>';
											<option value="Bangalore" id="Bangalore">
							Bangalore						</option>';
											<option value="Bankura" id="Bankura">
							Bankura						</option>';
											<option value="Bansberia" id="Bansberia">
							Bansberia						</option>';
											<option value="Banswara" id="Banswara">
							Banswara						</option>';
											<option value="Bapatla" id="Bapatla">
							Bapatla						</option>';
											<option value="Baramati" id="Baramati">
							Baramati						</option>';
											<option value="Barabanki" id="Barabanki">
							Barabanki						</option>';
											<option value="Baramulla" id="Baramulla">
							Baramulla						</option>';
											<option value="Baran" id="Baran">
							Baran						</option>';
											<option value="Baranagar" id="Baranagar">
							Baranagar						</option>';
											<option value="Barasat" id="Barasat">
							Barasat						</option>';
											<option value="Baraut" id="Baraut">
							Baraut						</option>';
											<option value="Barbil" id="Barbil">
							Barbil						</option>';
											<option value="Bardhaman" id="Bardhaman">
							Bardhaman						</option>';
											<option value="Bardoli" id="Bardoli">
							Bardoli						</option>';
											<option value="Bareilly" id="Bareilly">
							Bareilly						</option>';
											<option value="Bargarh" id="Bargarh">
							Bargarh						</option>';
											<option value="Bari" id="Bari">
							Bari						</option>';
											<option value="Baripada" id="Baripada">
							Baripada						</option>';
											<option value="Barmer" id="Barmer">
							Barmer						</option>';
											<option value="Barnala" id="Barnala">
							Barnala						</option>';
											<option value="Barrackpore" id="Barrackpore">
							Barrackpore						</option>';
											<option value="Barshi" id="Barshi">
							Barshi						</option>';
											<option value="Baruipur" id="Baruipur">
							Baruipur						</option>';
											<option value="Basavakalyan" id="Basavakalyan">
							Basavakalyan						</option>';
											<option value="Basirhat" id="Basirhat">
							Basirhat						</option>';
											<option value="Basmath" id="Basmath">
							Basmath						</option>';
											<option value="Basti" id="Basti">
							Basti						</option>';
											<option value="Batala" id="Batala">
							Batala						</option>';
											<option value="Bathinda" id="Bathinda">
							Bathinda						</option>';
											<option value="Beawar" id="Beawar">
							Beawar						</option>';
											<option value="Beed" id="Beed">
							Beed						</option>';
											<option value="Begusarai" id="Begusarai">
							Begusarai						</option>';
											<option value="BehtaHajipur" id="BehtaHajipur">
							BehtaHajipur						</option>';
											<option value="BelaPratapgarh" id="BelaPratapgarh">
							BelaPratapgarh						</option>';
											<option value="Beldanga" id="Beldanga">
							Beldanga						</option>';
											<option value="Belgaum" id="Belgaum">
							Belgaum						</option>';
											<option value="Bellampalle" id="Bellampalle">
							Bellampalle						</option>';
											<option value="Bellary" id="Bellary">
							Bellary						</option>';
											<option value="Bettiah" id="Bettiah">
							Bettiah						</option>';
											<option value="Betul" id="Betul">
							Betul						</option>';
											<option value="Bhadohi" id="Bhadohi">
							Bhadohi						</option>';
											<option value="Bhadrak" id="Bhadrak">
							Bhadrak						</option>';
											<option value="Bhadravathi" id="Bhadravathi">
							Bhadravathi						</option>';
											<option value="Bhadravati" id="Bhadravati">
							Bhadravati						</option>';
											<option value="Bhadreswar" id="Bhadreswar">
							Bhadreswar						</option>';
											<option value="Bhagalpur" id="Bhagalpur">
							Bhagalpur						</option>';
											<option value="Bhandara" id="Bhandara">
							Bhandara						</option>';
											<option value="Bharatpur" id="Bharatpur">
							Bharatpur						</option>';
											<option value="Bharuch" id="Bharuch">
							Bharuch						</option>';
											<option value="Bhatapara" id="Bhatapara">
							Bhatapara						</option>';
											<option value="Bhatpara" id="Bhatpara">
							Bhatpara						</option>';
											<option value="Bhavani" id="Bhavani">
							Bhavani						</option>';
											<option value="Bhavnagar" id="Bhavnagar">
							Bhavnagar						</option>';
											<option value="Bhawanipatna" id="Bhawanipatna">
							Bhawanipatna						</option>';
											<option value="Bhilai" id="Bhilai">
							Bhilai						</option>';
											<option value="BhilaiCharoda" id="BhilaiCharoda">
							BhilaiCharoda						</option>';
											<option value="Bhilwara" id="Bhilwara">
							Bhilwara						</option>';
											<option value="Bhimavaram" id="Bhimavaram">
							Bhimavaram						</option>';
											<option value="Bhind" id="Bhind">
							Bhind						</option>';
											<option value="Bhiwani" id="Bhiwani">
							Bhiwani						</option>';
											<option value="Bhopal" id="Bhopal">
							Bhopal						</option>';
											<option value="Bhubaneswar" id="Bhubaneswar">
							Bhubaneswar						</option>';
											<option value="Bhuj" id="Bhuj">
							Bhuj						</option>';
											<option value="Bhuli" id="Bhuli">
							Bhuli						</option>';
											<option value="Bhusawal" id="Bhusawal">
							Bhusawal						</option>';
											<option value="Bidar" id="Bidar">
							Bidar						</option>';
											<option value="Bidhannagar" id="Bidhannagar">
							Bidhannagar						</option>';
											<option value="Bijapur" id="Bijapur">
							Bijapur						</option>';
											<option value="Bijnor" id="Bijnor">
							Bijnor						</option>';
											<option value="Bikaner" id="Bikaner">

							Bikaner						</option>';
											<option value="Bilaspur" id="Bilaspur">
							Bilaspur						</option>';
											<option value="Bilimora" id="Bilimora">
							Bilimora						</option>';
											<option value="BinaEtawa" id="BinaEtawa">
							BinaEtawa						</option>';
											<option value="Birnagar" id="Birnagar">
							Birnagar						</option>';
											<option value="Bisalpur" id="Bisalpur">
							Bisalpur						</option>';
											<option value="Bishnupur" id="Bishnupur">
							Bishnupur						</option>';
											<option value="Bobbili" id="Bobbili">
							Bobbili						</option>';
											<option value="Bodhan" id="Bodhan">
							Bodhan						</option>';
											<option value="Bodinayakkanur" id="Bodinayakkanur">
							Bodinayakkanur						</option>';
											<option value="BokaroSteelCity" id="BokaroSteelCity">
							BokaroSteelCity						</option>';
											<option value="BolpurSantiniketan" id="BolpurSantiniketan">
							BolpurSantiniketan						</option>';
											<option value="Bongaigaon" id="Bongaigaon">
							Bongaigaon						</option>';
											<option value="Bongaon" id="Bongaon">
							Bongaon						</option>';
											<option value="Borsad" id="Borsad">
							Borsad						</option>';
											<option value="Botad" id="Botad">
							Botad						</option>';
											<option value="Brahmapur" id="Brahmapur">
							Brahmapur						</option>';
											<option value="Brajarajnagar" id="Brajarajnagar">
							Brajarajnagar						</option>';
											<option value="Budaun" id="Budaun">
							Budaun						</option>';
											<option value="BudgeBudge" id="BudgeBudge">
							BudgeBudge						</option>';
											<option value="Bulandshahr" id="Bulandshahr">
							Bulandshahr						</option>';
											<option value="Buldhana" id="Buldhana">
							Buldhana						</option>';
											<option value="Bundi" id="Bundi">
							Bundi						</option>';
											<option value="Burhanpur" id="Burhanpur">
							Burhanpur						</option>';
											<option value="Buxar" id="Buxar">
							Buxar						</option>';
											<option value="Chaibasa" id="Chaibasa">
							Chaibasa						</option>';
											<option value="Chakdaha" id="Chakdaha">
							Chakdaha						</option>';
											<option value="Chakradharpur" id="Chakradharpur">
							Chakradharpur						</option>';
											<option value="Chalisgaon" id="Chalisgaon">
							Chalisgaon						</option>';
											<option value="Chamba" id="Chamba">
							Chamba						</option>';
											<option value="Champdani" id="Champdani">
							Champdani						</option>';
											<option value="Chamrajnagar" id="Chamrajnagar">
							Chamrajnagar						</option>';
											<option value="Chandannagar" id="Chandannagar">
							Chandannagar						</option>';
											<option value="Chandausi" id="Chandausi">
							Chandausi						</option>';
											<option value="Chandigarh" id="Chandigarh">
							Chandigarh						</option>';
											<option value="Chandkheda" id="Chandkheda">
							Chandkheda						</option>';
											<option value="Chandlodiya" id="Chandlodiya">
							Chandlodiya						</option>';
											<option value="Chandpur" id="Chandpur">
							Chandpur						</option>';
											<option value="Chandrapur" id="Chandrapur">
							Chandrapur						</option>';
											<option value="Chandrokona" id="Chandrokona">
							Chandrokona						</option>';
											<option value="Changanacherry" id="Changanacherry">
							Changanacherry						</option>';
											<option value="Channapatna" id="Channapatna">
							Channapatna						</option>';
											<option value="Chapra" id="Chapra">
							Chapra						</option>';
											<option value="Chengalpattu" id="Chengalpattu">
							Chengalpattu						</option>';
											<option value="Chennai" id="Chennai">

							Chennai						</option>';
											<option value="Cherthala" id="Cherthala">
							Cherthala						</option>';
											<option value="Chhatarpur" id="Chhatarpur">
							Chhatarpur						</option>';
											<option value="Chhibramau" id="Chhibramau">
							Chhibramau						</option>';
											<option value="Chhindwara" id="Chhindwara">
							Chhindwara						</option>';
											<option value="Chidambaram" id="Chidambaram">
							Chidambaram						</option>';
											<option value="Chikkaballapur" id="Chikkaballapur">
							Chikkaballapur						</option>';
											<option value="Chikmagalur" id="Chikmagalur">
							Chikmagalur						</option>';
											<option value="Chilakalurupet" id="Chilakalurupet">
							Chilakalurupet						</option>';
											<option value="Chinnachowk" id="Chinnachowk">
							Chinnachowk						</option>';
											<option value="Chintamani" id="Chintamani">
							Chintamani						</option>';
											<option value="Chirala" id="Chirala">
							Chirala						</option>';
											<option value="Chirkunda" id="Chirkunda">
							Chirkunda						</option>';
											<option value="Chirmiri" id="Chirmiri">
							Chirmiri						</option>';
											<option value="Chitradurga" id="Chitradurga">
							Chitradurga						</option>';
											<option value="Chittoor" id="Chittoor">
							Chittoor						</option>';
											<option value="Chittorgarh" id="Chittorgarh">
							Chittorgarh						</option>';
											<option value="Chittur" id="Chittur">
							Chittur						</option>';
											<option value="Chomu" id="Chomu">
							Chomu						</option>';
											<option value="Chopda" id="Chopda">
							Chopda						</option>';
											<option value="Churu" id="Churu">
							Churu						</option>';
											<option value="Coimbatore" id="Coimbatore">
							Coimbatore						</option>';
											<option value="Contai" id="Contai">
							Contai						</option>';
											<option value="CoochBehar" id="CoochBehar">
							CoochBehar						</option>';
											<option value="Coonoor" id="Coonoor">
							Coonoor						</option>';
											<option value="CoopersCamp" id="CoopersCamp">
							CoopersCamp						</option>';
											<option value="Cuddalore" id="Cuddalore">
							Cuddalore						</option>';
											<option value="Cuddapah" id="Cuddapah">
							Cuddapah						</option>';
											<option value="Cuttack" id="Cuttack">
							Cuttack						</option>';
											<option value="Dabhoi" id="Dabhoi">
							Dabhoi						</option>';
											<option value="Dabra" id="Dabra">
							Dabra						</option>';
											<option value="Dadri" id="Dadri">
							Dadri						</option>';
											<option value="Dahod" id="Dahod">
							Dahod						</option>';
											<option value="Dainhat" id="Dainhat">
							Dainhat						</option>';
											<option value="Dalhousie" id="Dalhousie">
							Dalhousie						</option>';
											<option value="Dalkhola" id="Dalkhola">
							Dalkhola						</option>';
											<option value="DalliRajhara" id="DalliRajhara">
							DalliRajhara						</option>';
											<option value="Daltonganj" id="Daltonganj">
							Daltonganj						</option>';
											<option value="Daman" id="Daman">
							Daman						</option>';
											<option value="Damoh" id="Damoh">
							Damoh						</option>';
											<option value="Dandeli" id="Dandeli">
							Dandeli						</option>';
											<option value="Darbhanga" id="Darbhanga">
							Darbhanga						</option>';
											<option value="Darjeeling" id="Darjeeling">
							Darjeeling						</option>';
											<option value="Datia" id="Datia">
							Datia						</option>';
											<option value="Dausa" id="Dausa">
							Dausa						</option>';
											<option value="Davanagere" id="Davanagere">
							Davanagere						</option>';
											<option value="Deesa" id="Deesa">
							Deesa						</option>';
											<option value="Dehradun" id="Dehradun">
							Dehradun						</option>';
											<option value="DehrionSone" id="DehrionSone">
							DehrionSone						</option>';
											<option value="Delhi" id="Delhi">
							Delhi						</option>';
											<option value="Deoband" id="Deoband">
							Deoband						</option>';
											<option value="Deoghar" id="Deoghar">
							Deoghar						</option>';
											<option value="Deolali" id="Deolali">
							Deolali						</option>';
											<option value="Deoria" id="Deoria">
							Deoria						</option>';
											<option value="Devarshola" id="Devarshola">
							Devarshola						</option>';
											<option value="Dewas" id="Dewas">
							Dewas						</option>';
											<option value="Dhamtari" id="Dhamtari">
							Dhamtari						</option>';
											<option value="Dhanbad" id="Dhanbad">
							Dhanbad						</option>';
											<option value="Dhanpuri" id="Dhanpuri">
							Dhanpuri						</option>';
											<option value="Dhar" id="Dhar">
							Dhar						</option>';
											<option value="Dharampur" id="Dharampur">
							Dharampur						</option>';
											<option value="Dharapuram" id="Dharapuram">
							Dharapuram						</option>';
											<option value="Dharamsala" id="Dharamsala">
							Dharamsala						</option>';
											<option value="Dharmapuri" id="Dharmapuri">
							Dharmapuri						</option>';
											<option value="Dharmavaram" id="Dharmavaram">
							Dharmavaram						</option>';
											<option value="Dhenkanal" id="Dhenkanal">
							Dhenkanal						</option>';
											<option value="Dholka" id="Dholka">
							Dholka						</option>';
											<option value="Dholpur" id="Dholpur">
							Dholpur						</option>';
											<option value="Dhoraji" id="Dhoraji">
							Dhoraji						</option>';
											<option value="Dhrangadhra" id="Dhrangadhra">
							Dhrangadhra						</option>';
											<option value="Dhubri" id="Dhubri">
							Dhubri						</option>';
											<option value="Dhule" id="Dhule">
							Dhule						</option>';
											<option value="Dhulian" id="Dhulian">
							Dhulian						</option>';
											<option value="Dhupguri" id="Dhupguri">
							Dhupguri						</option>';
											<option value="DiamondHarbour" id="DiamondHarbour">
							DiamondHarbour						</option>';
											<option value="Dibrugarh" id="Dibrugarh">
							Dibrugarh						</option>';
											<option value="Dimapur" id="Dimapur">
							Dimapur						</option>';
											<option value="DinapurNizamat" id="DinapurNizamat">
							DinapurNizamat						</option>';
											<option value="Dindigul" id="Dindigul">
							Dindigul						</option>';
											<option value="Diphu" id="Diphu">
							Diphu						</option>';
											<option value="Dispur" id="Dispur">
							Dispur						</option>';
											<option value="Diu" id="Diu">
							Diu						</option>';
											<option value="Doddaballapur" id="Doddaballapur">
							Doddaballapur						</option>';
											<option value="Dubrajpur" id="Dubrajpur">
							Dubrajpur						</option>';
											<option value="Dumdum" id="Dumdum">
							Dumdum						</option>';
											<option value="Durg" id="Durg">
							Durg						</option>';
											<option value="Durgapur" id="Durgapur">
							Durgapur						</option>';
											<option value="Dwarka" id="Dwarka">
							Dwarka						</option>';
											<option value="Edathala" id="Edathala">
							Edathala						</option>';
											<option value="Egra" id="Egra">
							Egra						</option>';
											<option value="Eluru" id="Eluru">
							Eluru						</option>';
											<option value="EnglishBazar" id="EnglishBazar">
							EnglishBazar						</option>';
											<option value="Erode" id="Erode">
							Erode						</option>';
											<option value="Etah" id="Etah">
							Etah						</option>';
											<option value="Etawah" id="Etawah">
							Etawah						</option>';
											<option value="Faizabad" id="Faizabad">
							Faizabad						</option>';
											<option value="Faridabad" id="Faridabad">
							Faridabad						</option>';
											<option value="Faridkot" id="Faridkot">
							Faridkot						</option>';
											<option value="Faridpur" id="Faridpur">
							Faridpur						</option>';
											<option value="Farrukhabad" id="Farrukhabad">
							Farrukhabad						</option>';
											<option value="Fatehabad" id="Fatehabad">
							Fatehabad						</option>';
											<option value="Fatehpur" id="Fatehpur">
							Fatehpur						</option>';
											<option value="Fazilka" id="Fazilka">
							Fazilka						</option>';
											<option value="Firozabad" id="Firozabad">
							Firozabad						</option>';
											<option value="Firozpur" id="Firozpur">
							Firozpur						</option>';
											<option value="FirozpurCantonment" id="FirozpurCantonment">
							FirozpurCantonment						</option>';
											<option value="Gadag" id="Gadag">
							Gadag						</option>';
											<option value="GaddiAnnaram" id="GaddiAnnaram">
							GaddiAnnaram						</option>';
											<option value="Gadwal" id="Gadwal">
							Gadwal						</option>';
											<option value="Gandhidham" id="Gandhidham">
							Gandhidham						</option>';
											<option value="Gandhinagar" id="Gandhinagar">
							Gandhinagar						</option>';
											<option value="Gangaghat" id="Gangaghat">
							Gangaghat						</option>';
											<option value="Ganganagar" id="Ganganagar">
							Ganganagar						</option>';
											<option value="GangapurCity" id="GangapurCity">
							GangapurCity						</option>';
											<option value="Gangarampur" id="Gangarampur">
							Gangarampur						</option>';
											<option value="Gangavathi" id="Gangavathi">
							Gangavathi						</option>';
											<option value="Gangoh" id="Gangoh">
							Gangoh						</option>';
											<option value="Gangtok" id="Gangtok">
							Gangtok						</option>';
											<option value="Garulia" id="Garulia">
							Garulia						</option>';
											<option value="Gaya" id="Gaya">
							Gaya						</option>';
											<option value="Ghatal" id="Ghatal">
							Ghatal						</option>';
											<option value="Ghatlodiya" id="Ghatlodiya">
							Ghatlodiya						</option>';
											<option value="Ghaziabad" id="Ghaziabad">
							Ghaziabad						</option>';
											<option value="Ghazipur" id="Ghazipur">
							Ghazipur						</option>';
											<option value="Giridih" id="Giridih">
							Giridih						</option>';
											<option value="Goa" id="Goa">
							Goa						</option>';
											<option value="Gobardanga" id="Gobardanga">
							Gobardanga						</option>';
											<option value="Gobichettipalayam" id="Gobichettipalayam">
							Gobichettipalayam						</option>';
											<option value="Godhra" id="Godhra">
							Godhra						</option>';
											<option value="Gokak" id="Gokak">
							Gokak						</option>';
											<option value="GolaGokarannath" id="GolaGokarannath">
							GolaGokarannath						</option>';
											<option value="Gonda" id="Gonda">
							Gonda						</option>';
											<option value="Gondal" id="Gondal">
							Gondal						</option>';
											<option value="Gondia" id="Gondia">
							Gondia						</option>';
											<option value="Gopalganj" id="Gopalganj">
							Gopalganj						</option>';
											<option value="Gorakhpur" id="Gorakhpur">
							Gorakhpur						</option>';
											<option value="GreaterNoida" id="GreaterNoida">
							GreaterNoida						</option>';
											<option value="Gudivada" id="Gudivada">
							Gudivada						</option>';
											<option value="Gudiyatham" id="Gudiyatham">
							Gudiyatham						</option>';
											<option value="Gudur" id="Gudur">
							Gudur						</option>';
											<option value="Gulbarga" id="Gulbarga">
							Gulbarga						</option>';
											<option value="Guna" id="Guna">
							Guna						</option>';
											<option value="Guntakal" id="Guntakal">
							Guntakal						</option>';
											<option value="Guntur" id="Guntur">
							Guntur						</option>';
											<option value="Gurdaspur" id="Gurdaspur">
							Gurdaspur						</option>';
											<option value="Gurgaon" id="Gurgaon">
							Gurgaon						</option>';
											<option value="Guskara" id="Guskara">
							Guskara						</option>';
											<option value="Guwahati" id="Guwahati">
							Guwahati						</option>';
											<option value="Gwalior" id="Gwalior">
							Gwalior						</option>';
											<option value="Habra" id="Habra">
							Habra						</option>';
											<option value="Hajipur" id="Hajipur">
							Hajipur						</option>';
											<option value="Haldia" id="Haldia">
							Haldia						</option>';
											<option value="Haldibari" id="Haldibari">
							Haldibari						</option>';
											<option value="Haldwani" id="Haldwani">
							Haldwani						</option>';
											<option value="Halisahar" id="Halisahar">
							Halisahar						</option>';
											<option value="Hansi" id="Hansi">
							Hansi						</option>';
											<option value="Hanumangarh" id="Hanumangarh">
							Hanumangarh						</option>';
											<option value="Hapur" id="Hapur">
							Hapur						</option>';
											<option value="Harda" id="Harda">
							Harda						</option>';
											<option value="Hardoi" id="Hardoi">
							Hardoi						</option>';
											<option value="Hardwar" id="Hardwar">
							Hardwar						</option>';
											<option value="Harihar" id="Harihar">
							Harihar						</option>';
											<option value="Hasanpur" id="Hasanpur">
							Hasanpur						</option>';
											<option value="Hassan" id="Hassan">
							Hassan						</option>';
											<option value="Hathras" id="Hathras">
							Hathras						</option>';
											<option value="Haveri" id="Haveri">
							Haveri						</option>';
											<option value="Hazaribag" id="Hazaribag">
							Hazaribag						</option>';
											<option value="Himatnagar" id="Himatnagar">
							Himatnagar						</option>';
											<option value="Hindaun" id="Hindaun">
							Hindaun						</option>';
											<option value="Hindupur" id="Hindupur">
							Hindupur						</option>';
											<option value="Hinganghat" id="Hinganghat">
							Hinganghat						</option>';
											<option value="Hingoli" id="Hingoli">
							Hingoli						</option>';
											<option value="Hisar" id="Hisar">
							Hisar						</option>';
											<option value="Hoshangabad" id="Hoshangabad">
							Hoshangabad						</option>';
											<option value="Hoshiarpur" id="Hoshiarpur">
							Hoshiarpur						</option>';
											<option value="Hospet" id="Hospet">
							Hospet						</option>';
											<option value="Hosur" id="Hosur">
							Hosur						</option>';
											<option value="Howrah" id="Howrah">
							Howrah						</option>';
											<option value="Hubli" id="Hubli">
							Hubli						</option>';
											<option value="HugliChuchura" id="HugliChuchura">
							HugliChuchura						</option>';
											<option value="Hyderabad" id="Hyderabad">
							Hyderabad						</option>';
											<option value="Ichalkaranji" id="Ichalkaranji">
							Ichalkaranji						</option>';
											<option value="Ilkal" id="Ilkal">
							Ilkal						</option>';
											<option value="Imphal" id="Imphal">
							Imphal						</option>';
											<option value="Indore" id="Indore">
							Indore						</option>';
											<option value="Islampur" id="Islampur">
							Islampur						</option>';
											<option value="Itanagar" id="Itanagar">
							Itanagar						</option>';
											<option value="Itarsi" id="Itarsi">
							Itarsi						</option>';
											<option value="Jabalpur" id="Jabalpur">
							Jabalpur						</option>';
											<option value="Jagadhri" id="Jagadhri">
							Jagadhri						</option>';
											<option value="Jagdalpur" id="Jagdalpur">
							Jagdalpur						</option>';
											<option value="Jagraon" id="Jagraon">
							Jagraon						</option>';
											<option value="Jagtial" id="Jagtial">
							Jagtial						</option>';
											<option value="Jahangirabad" id="Jahangirabad">
							Jahangirabad						</option>';
											<option value="Jaipur" id="Jaipur">
							Jaipur						</option>';
											<option value="Jaisalmer" id="Jaisalmer">
							Jaisalmer						</option>';
											<option value="Jalandhar" id="Jalandhar">
							Jalandhar						</option>';
											<option value="Jalgaon" id="Jalgaon">
							Jalgaon						</option>';
											<option value="Jalna" id="Jalna">
							Jalna						</option>';
											<option value="Jalpaiguri" id="Jalpaiguri">
							Jalpaiguri						</option>';
											<option value="Jamakhandi" id="Jamakhandi">
							Jamakhandi						</option>';
											<option value="Jamalpur" id="Jamalpur">
							Jamalpur						</option>';
											<option value="Jammu" id="Jammu">
							Jammu						</option>';
											<option value="Jamnagar" id="Jamnagar">
							Jamnagar						</option>';
											<option value="Jamshedpur" id="Jamshedpur">
							Jamshedpur						</option>';
											<option value="Jamui" id="Jamui">
							Jamui						</option>';
											<option value="Jamuria" id="Jamuria">
							Jamuria						</option>';
											<option value="Jaora" id="Jaora">
							Jaora						</option>';
											<option value="Jatani" id="Jatani">
							Jatani						</option>';
											<option value="Jaunpur" id="Jaunpur">
							Jaunpur						</option>';
											<option value="JaynagarMazilpur" id="JaynagarMazilpur">
							JaynagarMazilpur						</option>';
											<option value="Jehanabad" id="Jehanabad">
							Jehanabad						</option>';
											<option value="Jetpur" id="Jetpur">
							Jetpur						</option>';
											<option value="Jeypore" id="Jeypore">
							Jeypore						</option>';
											<option value="Jhalda" id="Jhalda">
							Jhalda						</option>';
											<option value="Jhansi" id="Jhansi">
							Jhansi						</option>';
											<option value="Jhargram" id="Jhargram">
							Jhargram						</option>';
											<option value="Jharia" id="Jharia">
							Jharia						</option>';
											<option value="Jharsuguda" id="Jharsuguda">
							Jharsuguda						</option>';
											<option value="Jhajjar" id="Jhajjar">
							Jhajjar						</option>';
											<option value="JhumriTelaiya" id="JhumriTelaiya">
							JhumriTelaiya						</option>';
											<option value="Jhunjhunu" id="Jhunjhunu">
							Jhunjhunu						</option>';
											<option value="JiaganjAzimganj" id="JiaganjAzimganj">
							JiaganjAzimganj						</option>';
											<option value="Jind" id="Jind">
							Jind						</option>';
											<option value="Jodhpur" id="Jodhpur">
							Jodhpur						</option>';
											<option value="Jorapokhar" id="Jorapokhar">
							Jorapokhar						</option>';
											<option value="Jorhat" id="Jorhat">
							Jorhat						</option>';
											<option value="Junagadh" id="Junagadh">
							Junagadh						</option>';
											<option value="Kadayanallur" id="Kadayanallur">
							Kadayanallur						</option>';
											<option value="Kadi" id="Kadi">
							Kadi						</option>';
											<option value="Kadiri" id="Kadiri">
							Kadiri						</option>';
											<option value="Kagaznagar" id="Kagaznagar">
							Kagaznagar						</option>';
											<option value="Kairana" id="Kairana">
							Kairana						</option>';
											<option value="Kaithal" id="Kaithal">
							Kaithal						</option>';
											<option value="Kakinada" id="Kakinada">
							Kakinada						</option>';
											<option value="Kaliaganj" id="Kaliaganj">
							Kaliaganj						</option>';
											<option value="Kalimpong" id="Kalimpong">
							Kalimpong						</option>';
											<option value="Kallur" id="Kallur">
							Kallur						</option>';
											<option value="Kalna" id="Kalna">
							Kalna						</option>';
											<option value="Kalol" id="Kalol">
							Kalol						</option>';
											<option value="Kalyan" id="Kalyan">
							Kalyan						</option>';
											<option value="Kalyani" id="Kalyani">
							Kalyani						</option>';
											<option value="Kamarhati" id="Kamarhati">
							Kamarhati						</option>';
											<option value="Kambam" id="Kambam">
							Kambam						</option>';
											<option value="Kamthi" id="Kamthi">
							Kamthi						</option>';
											<option value="Kanchipuram" id="Kanchipuram">
							Kanchipuram						</option>';
											<option value="Kanchrapara" id="Kanchrapara">
							Kanchrapara						</option>';
											<option value="Kandi" id="Kandi">
							Kandi						</option>';
											<option value="Kandla" id="Kandla">
							Kandla						</option>';
											<option value="Kangra" id="Kangra">
							Kangra						</option>';
											<option value="Kanhangad" id="Kanhangad">
							Kanhangad						</option>';
											<option value="Kannauj" id="Kannauj">
							Kannauj						</option>';
											<option value="Kannur" id="Kannur">
							Kannur						</option>';
											<option value="Kanpur" id="Kanpur">
							Kanpur						</option>';
											<option value="Kanyakumari" id="Kanyakumari">
							Kanyakumari						</option>';
											<option value="Kapra" id="Kapra">
							Kapra						</option>';
											<option value="Kapurthala" id="Kapurthala">
							Kapurthala						</option>';
											<option value="Karad" id="Karad">
							Karad						</option>';
											<option value="Karaikal" id="Karaikal">
							Karaikal						</option>';
											<option value="Karaikudi" id="Karaikudi">
							Karaikudi						</option>';
											<option value="Karanja" id="Karanja">
							Karanja						</option>';
											<option value="Karauli" id="Karauli">
							Karauli						</option>';
											<option value="Karimganj" id="Karimganj">
							Karimganj						</option>';
											<option value="Karimnagar" id="Karimnagar">
							Karimnagar						</option>';
											<option value="Karnal" id="Karnal">
							Karnal						</option>';
											<option value="Karur" id="Karur">
							Karur						</option>';
											<option value="Karwar" id="Karwar">
							Karwar						</option>';
											<option value="Kasaragod" id="Kasaragod">
							Kasaragod						</option>';
											<option value="Kasauli" id="Kasauli">
							Kasauli						</option>';
											<option value="Kasganj" id="Kasganj">
							Kasganj						</option>';
											<option value="Kashipur" id="Kashipur">
							Kashipur						</option>';
											<option value="Kathua" id="Kathua">
							Kathua						</option>';
											<option value="Katihar" id="Katihar">
							Katihar						</option>';
											<option value="Katni" id="Katni">
							Katni						</option>';
											<option value="Katras" id="Katras">
							Katras						</option>';
											<option value="Katwa" id="Katwa">
							Katwa						</option>';
											<option value="Kavali" id="Kavali">
							Kavali						</option>';
											<option value="Kavaratti" id="Kavaratti">
							Kavaratti						</option>';
											<option value="Kayamkulam" id="Kayamkulam">
							Kayamkulam						</option>';
											<option value="Kendujhar" id="Kendujhar">
							Kendujhar						</option>';
											<option value="Keshod" id="Keshod">
							Keshod						</option>';
											<option value="Khambhat" id="Khambhat">
							Khambhat						</option>';
											<option value="Khamgaon" id="Khamgaon">
							Khamgaon						</option>';
											<option value="Khamman" id="Khamman">
							Khamman						</option>';
											<option value="Khandwa" id="Khandwa">
							Khandwa						</option>';
											<option value="Khanna" id="Khanna">
							Khanna						</option>';
											<option value="Kharagpur" id="Kharagpur">
							Kharagpur						</option>';
											<option value="Kharar" id="Kharar">
							Kharar						</option>';
											<option value="Khardaha" id="Khardaha">
							Khardaha						</option>';
											<option value="Khargone" id="Khargone">
							Khargone						</option>';
											<option value="Khatauli" id="Khatauli">
							Khatauli						</option>';
											<option value="Khirpai" id="Khirpai">
							Khirpai						</option>';
											<option value="Khopoli" id="Khopoli">
							Khopoli						</option>';
											<option value="Khurja" id="Khurja">
							Khurja						</option>';
											<option value="Kiratpur" id="Kiratpur">
							Kiratpur						</option>';
											<option value="Kishanganj" id="Kishanganj">
							Kishanganj						</option>';
											<option value="Kishangarh" id="Kishangarh">
							Kishangarh						</option>';
											<option value="Kochi" id="Kochi">
							Kochi						</option>';
											<option value="Kohima" id="Kohima">
							Kohima						</option>';
											<option value="Kolar" id="Kolar">
							Kolar						</option>';
											<option value="Kolhapur" id="Kolhapur">
							Kolhapur						</option>';
											<option value="Kolkata" id="Kolkata">
							Kolkata						</option>';
											<option value="Kollam" id="Kollam">
							Kollam						</option>';
											<option value="Kollegal" id="Kollegal">
							Kollegal						</option>';
											<option value="Komarapalayam" id="Komarapalayam">
							Komarapalayam						</option>';
											<option value="Konch" id="Konch">
							Konch						</option>';
											<option value="Konnagar" id="Konnagar">
							Konnagar						</option>';
											<option value="Kopargaon" id="Kopargaon">
							Kopargaon						</option>';
											<option value="Koppal" id="Koppal">
							Koppal						</option>';
											<option value="Koratla" id="Koratla">
							Koratla						</option>';
											<option value="Korba" id="Korba">
							Korba						</option>';
											<option value="Kota" id="Kota">
							Kota						</option>';
											<option value="Kotkapura" id="Kotkapura">
							Kotkapura						</option>';
											<option value="Kottagudem" id="Kottagudem">
							Kottagudem						</option>';
											<option value="Kottayam" id="Kottayam">
							Kottayam						</option>';
											<option value="Kovilpatti" id="Kovilpatti">
							Kovilpatti						</option>';
											<option value="Kozhikode" id="Kozhikode">
							Kozhikode						</option>';
											<option value="Krishnagiri" id="Krishnagiri">
							Krishnagiri						</option>';
											<option value="Krishnanagar" id="Krishnanagar">
							Krishnanagar						</option>';
											<option value="Kuchaman" id="Kuchaman">
							Kuchaman						</option>';
											<option value="Kulti" id="Kulti">
							Kulti						</option>';
											<option value="Kullu" id="Kullu">
							Kullu						</option>';
											<option value="Kumbakonam" id="Kumbakonam">
							Kumbakonam						</option>';
											<option value="Kurnool" id="Kurnool">
							Kurnool						</option>';
											<option value="Kurseong" id="Kurseong">
							Kurseong						</option>';
											<option value="Kurukshetra" id="Kurukshetra">
							Kurukshetra						</option>';
											<option value="Ladnun" id="Ladnun">
							Ladnun						</option>';
											<option value="Laharpur" id="Laharpur">
							Laharpur						</option>';
											<option value="Lakhimpur" id="Lakhimpur">
							Lakhimpur						</option>';
											<option value="Lakhisarai" id="Lakhisarai">
							Lakhisarai						</option>';
											<option value="Lalitpur" id="Lalitpur">
							Lalitpur						</option>';
											<option value="Latur" id="Latur">
							Latur						</option>';
											<option value="Leh" id="Leh">
							Leh						</option>';
											<option value="Lonavla" id="Lonavla">
							Lonavla						</option>';
											<option value="Loni" id="Loni">
							Loni						</option>';
											<option value="Lucknow" id="Lucknow">
							Lucknow						</option>';
											<option value="Ludhiana" id="Ludhiana">
							Ludhiana						</option>';
											<option value="Lumding" id="Lumding">
							Lumding						</option>';
											<option value="Machilipatnam" id="Machilipatnam">
							Machilipatnam						</option>';
											<option value="Madanapalle" id="Madanapalle">
							Madanapalle						</option>';
											<option value="Madgaon" id="Madgaon">
							Madgaon						</option>';
											<option value="Madhubani" id="Madhubani">
							Madhubani						</option>';
											<option value="Madhyamgram" id="Madhyamgram">
							Madhyamgram						</option>';
											<option value="Madurai" id="Madurai">
							Madurai						</option>';
											<option value="Mahbubnagar" id="Mahbubnagar">
							Mahbubnagar						</option>';
											<option value="Maheshtala" id="Maheshtala">
							Maheshtala						</option>';
											<option value="Mahoba" id="Mahoba">
							Mahoba						</option>';
											<option value="Mahuva" id="Mahuva">
							Mahuva						</option>';
											<option value="Mainpuri" id="Mainpuri">
							Mainpuri						</option>';
											<option value="Makrana" id="Makrana">
							Makrana						</option>';
											<option value="Malappuram" id="Malappuram">
							Malappuram						</option>';
											<option value="Malbazar" id="Malbazar">
							Malbazar						</option>';
											<option value="Malegaon" id="Malegaon">
							Malegaon						</option>';
											<option value="Malerkotla" id="Malerkotla">
							Malerkotla						</option>';
											<option value="Malkapur" id="Malkapur">
							Malkapur						</option>';
											<option value="Malout" id="Malout">
							Malout						</option>';
											<option value="Manali" id="Manali">
							Manali						</option>';
											<option value="Mancherial" id="Mancherial">
							Mancherial						</option>';
											<option value="Mandamarri" id="Mandamarri">
							Mandamarri						</option>';
											<option value="MandiDabwali" id="MandiDabwali">
							MandiDabwali						</option>';
											<option value="MandiGobindgarh" id="MandiGobindgarh">
							MandiGobindgarh						</option>';
											<option value="Mandla" id="Mandla">
							Mandla						</option>';
											<option value="Mandsaur" id="Mandsaur">
							Mandsaur						</option>';
											<option value="Mandvi" id="Mandvi">
							Mandvi						</option>';
											<option value="Mandya" id="Mandya">
							Mandya						</option>';
											<option value="Mangalagiri" id="Mangalagiri">
							Mangalagiri						</option>';
											<option value="Mangalore" id="Mangalore">
							Mangalore						</option>';
											<option value="Mangrol" id="Mangrol">
							Mangrol						</option>';
											<option value="Manjeri" id="Manjeri">
							Manjeri						</option>';
											<option value="Manmad" id="Manmad">
							Manmad						</option>';
											<option value="Mannargudi" id="Mannargudi">
							Mannargudi						</option>';
											<option value="Mansa" id="Mansa">
							Mansa						</option>';
											<option value="Markapur" id="Markapur">
							Markapur						</option>';
											<option value="Mathabhanga" id="Mathabhanga">
							Mathabhanga						</option>';
											<option value="Mathura" id="Mathura">
							Mathura						</option>';
											<option value="Mau" id="Mau">
							Mau						</option>';
											<option value="Mauranipur" id="Mauranipur">
							Mauranipur						</option>';
											<option value="Mawana" id="Mawana">
							Mawana						</option>';
											<option value="Mayiladuthurai" id="Mayiladuthurai">
							Mayiladuthurai						</option>';
											<option value="Meerut" id="Meerut">
							Meerut						</option>';
											<option value="Mehsana" id="Mehsana">
							Mehsana						</option>';
											<option value="Mekliganj" id="Mekliganj">
							Mekliganj						</option>';
											<option value="Memari" id="Memari">
							Memari						</option>';
											<option value="Mettupalayam" id="Mettupalayam">
							Mettupalayam						</option>';
											<option value="Mettur" id="Mettur">
							Mettur						</option>';
											<option value="Mhow" id="Mhow">
							Mhow						</option>';
											<option value="Midnapore" id="Midnapore">
							Midnapore						</option>';
											<option value="Miraj" id="Miraj">
							Miraj						</option>';
											<option value="Mirik" id="Mirik">
							Mirik						</option>';
											<option value="Miryalguda" id="Miryalguda">
							Miryalguda						</option>';
											<option value="Mirzapur" id="Mirzapur">
							Mirzapur						</option>';
											<option value="Modasa" id="Modasa">
							Modasa						</option>';
											<option value="Modinagar" id="Modinagar">
							Modinagar						</option>';
											<option value="Moga" id="Moga">
							Moga						</option>';
											<option value="Mohali" id="Mohali">
							Mohali						</option>';
											<option value="Mokama" id="Mokama">
							Mokama						</option>';
											<option value="Moradabad" id="Moradabad">
							Moradabad						</option>';
											<option value="Morbi" id="Morbi">
							Morbi						</option>';
											<option value="Morena" id="Morena">
							Morena						</option>';
											<option value="Mormugoa" id="Mormugoa">
							Mormugoa						</option>';
											<option value="Motihari" id="Motihari">
							Motihari						</option>';
											<option value="Mubarakpur" id="Mubarakpur">
							Mubarakpur						</option>';
											<option value="Mughalsarai" id="Mughalsarai">
							Mughalsarai						</option>';
											<option value="Mumbai" id="Mumbai">
							Mumbai						</option>';
											<option value="Munger" id="Munger">
							Munger						</option>';
											<option value="Muradnagar" id="Muradnagar">
							Muradnagar						</option>';
											<option value="Murshidabad" id="Murshidabad">
							Murshidabad						</option>';
											<option value="Mussoorie" id="Mussoorie">
							Mussoorie						</option>';
											<option value="Muzaffarnagar" id="Muzaffarnagar">
							Muzaffarnagar						</option>';
											<option value="Muzaffarpur" id="Muzaffarpur">
							Muzaffarpur						</option>';
											<option value="Mysore" id="Mysore">
							Mysore						</option>';
											<option value="Nabadwip" id="Nabadwip">
							Nabadwip						</option>';
											<option value="Nabha" id="Nabha">
							Nabha						</option>';
											<option value="Nadiad" id="Nadiad">
							Nadiad						</option>';
											<option value="Nagaon" id="Nagaon">
							Nagaon						</option>';
											<option value="Nagapattinam" id="Nagapattinam">
							Nagapattinam						</option>';
											<option value="Nagaur" id="Nagaur">
							Nagaur						</option>';
											<option value="Nagda" id="Nagda">
							Nagda						</option>';
											<option value="Nagercoil" id="Nagercoil">
							Nagercoil						</option>';
											<option value="Nagina" id="Nagina">
							Nagina						</option>';
											<option value="Nagpur" id="Nagpur">
							Nagpur						</option>';
											<option value="Naihati" id="Naihati">
							Naihati						</option>';
											<option value="Nainital" id="Nainital">
							Nainital						</option>';
											<option value="Najibabad" id="Najibabad">
							Najibabad						</option>';
											<option value="Nalgonda" id="Nalgonda">
							Nalgonda						</option>';
											<option value="Nalhati" id="Nalhati">
							Nalhati						</option>';
											<option value="Namakkal" id="Namakkal">
							Namakkal						</option>';
											<option value="Nanded" id="Nanded">
							Nanded						</option>';
											<option value="Nandurbar" id="Nandurbar">
							Nandurbar						</option>';
											<option value="Nandyal" id="Nandyal">
							Nandyal						</option>';
											<option value="Narasaraopet" id="Narasaraopet">
							Narasaraopet						</option>';
											<option value="Narnaul" id="Narnaul">
							Narnaul						</option>';
											<option value="Narsapur" id="Narsapur">
							Narsapur						</option>';
											<option value="Narsinghpur" id="Narsinghpur">
							Narsinghpur						</option>';
											<option value="Narwana" id="Narwana">
							Narwana						</option>';
											<option value="Nashik" id="Nashik">
							Nashik						</option>';
											<option value="NavgharManikpur" id="NavgharManikpur">
							NavgharManikpur						</option>';
											<option value="NaviMumbai" id="NaviMumbai">
							NaviMumbai						</option>';
											<option value="Navsari" id="Navsari">
							Navsari						</option>';
											<option value="Nawabganj" id="Nawabganj">
							Nawabganj						</option>';
											<option value="Nawada" id="Nawada">
							Nawada						</option>';
											<option value="Nawalgarh" id="Nawalgarh">
							Nawalgarh						</option>';
											<option value="Nedumangad" id="Nedumangad">
							Nedumangad						</option>';
											<option value="Nellore" id="Nellore">
							Nellore						</option>';
											<option value="NewBarrackpur" id="NewBarrackpur">
							NewBarrackpur						</option>';
											<option value="Neyveli" id="Neyveli">
							Neyveli						</option>';
											<option value="Neyyattinkara" id="Neyyattinkara">
							Neyyattinkara						</option>';
											<option value="Nimach" id="Nimach">
							Nimach						</option>';
											<option value="Nimbahera" id="Nimbahera">
							Nimbahera						</option>';
											<option value="Nipani" id="Nipani">
							Nipani						</option>';
											<option value="Nirmal" id="Nirmal">
							Nirmal						</option>';
											<option value="Nizamabad" id="Nizamabad">
							Nizamabad						</option>';
											<option value="Noida" id="Noida">
							Noida						</option>';
											<option value="NorthLakhimpur" id="NorthLakhimpur">
							NorthLakhimpur						</option>';
											<option value="Nuzvid" id="Nuzvid">
							Nuzvid						</option>';
											<option value="Obra" id="Obra">
							Obra						</option>';
											<option value="Ongole" id="Ongole">
							Ongole						</option>';
											<option value="Ooty" id="Ooty">
							Ooty						</option>';
											<option value="Orai" id="Orai">
							Orai						</option>';
											<option value="Osmanabad" id="Osmanabad">
							Osmanabad						</option>';
											<option value="Ozhukarai" id="Ozhukarai">
							Ozhukarai						</option>';
											<option value="Palakkad" id="Palakkad">
							Palakkad						</option>';
											<option value="Palakol" id="Palakol">
							Palakol						</option>';
											<option value="Palani" id="Palani">
							Palani						</option>';
											<option value="Palanpur" id="Palanpur">
							Palanpur						</option>';
											<option value="Palghar" id="Palghar">
							Palghar						</option>';
											<option value="Pali" id="Pali">
							Pali						</option>';
											<option value="Palitana" id="Palitana">
							Palitana						</option>';
											<option value="Pallavaram" id="Pallavaram">
							Pallavaram						</option>';
											<option value="Palwal" id="Palwal">
							Palwal						</option>';
											<option value="Palwancha" id="Palwancha">
							Palwancha						</option>';
											<option value="Panaji" id="Panaji">
							Panaji						</option>';
											<option value="Panchkula" id="Panchkula">
							Panchkula						</option>';
											<option value="Pandharpur" id="Pandharpur">
							Pandharpur						</option>';
											<option value="Panihati" id="Panihati">
							Panihati						</option>';
											<option value="Panipat" id="Panipat">
							Panipat						</option>';
											<option value="Panna" id="Panna">
							Panna						</option>';
											<option value="Panruti" id="Panruti">
							Panruti						</option>';
											<option value="Panskura" id="Panskura">
							Panskura						</option>';
											<option value="Panvel" id="Panvel">
							Panvel						</option>';
											<option value="Paradip" id="Paradip">
							Paradip						</option>';
											<option value="Paramakudi" id="Paramakudi">
							Paramakudi						</option>';
											<option value="Parasia" id="Parasia">
							Parasia						</option>';
											<option value="Parbhani" id="Parbhani">
							Parbhani						</option>';
											<option value="Parli" id="Parli">
							Parli						</option>';
											<option value="Patan" id="Patan">
							Patan						</option>';
											<option value="Pathankot" id="Pathankot">
							Pathankot						</option>';
											<option value="Patiala" id="Patiala">
							Patiala						</option>';
											<option value="Patna" id="Patna">
							Patna						</option>';
											<option value="Pattukkottai" id="Pattukkottai">
							Pattukkottai						</option>';
											<option value="Payyannur" id="Payyannur">
							Payyannur						</option>';
											<option value="Petlad" id="Petlad">
							Petlad						</option>';
											<option value="Phagwara" id="Phagwara">
							Phagwara						</option>';
											<option value="Phaltan" id="Phaltan">
							Phaltan						</option>';
											<option value="PhulwariSharif" id="PhulwariSharif">
							PhulwariSharif						</option>';
											<option value="Phusro" id="Phusro">
							Phusro						</option>';
											<option value="Pilibhit" id="Pilibhit">
							Pilibhit						</option>';
											<option value="Pilkhuwa" id="Pilkhuwa">
							Pilkhuwa						</option>';
											<option value="PimpriChinchwad" id="PimpriChinchwad">
							PimpriChinchwad						</option>';
											<option value="Pitapuram" id="Pitapuram">
							Pitapuram						</option>';
											<option value="Pithampur" id="Pithampur">
							Pithampur						</option>';
											<option value="Pollachi" id="Pollachi">
							Pollachi						</option>';
											<option value="Pondicherry" id="Pondicherry">
							Pondicherry						</option>';
											<option value="Ponnani" id="Ponnani">
							Ponnani						</option>';
											<option value="Ponnur" id="Ponnur">
							Ponnur						</option>';
											<option value="Porbandar" id="Porbandar">
							Porbandar						</option>';
											<option value="PortBlair" id="PortBlair">
							PortBlair						</option>';
											<option value="Proddatur" id="Proddatur">
							Proddatur						</option>';
											<option value="Pudukkottai" id="Pudukkottai">
							Pudukkottai						</option>';
											<option value="Pujali" id="Pujali">
							Pujali						</option>';
											<option value="Puliyankudi" id="Puliyankudi">
							Puliyankudi						</option>';
											<option value="Pune" id="Pune">
							Pune						</option>';
											<option value="Puri" id="Puri">
							Puri						</option>';
											<option value="Purnia" id="Purnia">
							Purnia						</option>';
											<option value="Purulia" id="Purulia">
							Purulia						</option>';
											<option value="Pusad" id="Pusad">
							Pusad						</option>';
											<option value="Pushkar" id="Pushkar">
							Pushkar						</option>';
											<option value="Qutubullapur" id="Qutubullapur">
							Qutubullapur						</option>';
											<option value="RabkaviBanhatti" id="RabkaviBanhatti">
							RabkaviBanhatti						</option>';
											<option value="Raebareli" id="Raebareli">
							Raebareli						</option>';
											<option value="Raghunathpur" id="Raghunathpur">
							Raghunathpur						</option>';
											<option value="Raichur" id="Raichur">
							Raichur						</option>';
											<option value="Raiganj" id="Raiganj">
							Raiganj						</option>';
											<option value="Raigad" id="Raigad">
							Raigad						</option>';
											<option value="Raigarh" id="Raigarh">
							Raigarh						</option>';
											<option value="Raipur" id="Raipur">
							Raipur						</option>';
											<option value="Rajahmundry" id="Rajahmundry">
							Rajahmundry						</option>';
											<option value="Rajapalayam" id="Rajapalayam">
							Rajapalayam						</option>';
											<option value="Rajendranagar" id="Rajendranagar">
							Rajendranagar						</option>';
											<option value="Rajgarh" id="Rajgarh">
							Rajgarh						</option>';
											<option value="Rajkot" id="Rajkot">
							Rajkot						</option>';
											<option value="RajNandgaon" id="RajNandgaon">
							RajNandgaon						</option>';
											<option value="Rajpura" id="Rajpura">
							Rajpura						</option>';
											<option value="RajpurSonarpur" id="RajpurSonarpur">
							RajpurSonarpur						</option>';
											<option value="Rajsamand" id="Rajsamand">
							Rajsamand						</option>';
											<option value="Ramachandrapuram" id="Ramachandrapuram">
							Ramachandrapuram						</option>';
											<option value="Ramagundam" id="Ramagundam">
							Ramagundam						</option>';
											<option value="Ramanagaram" id="Ramanagaram">
							Ramanagaram						</option>';
											<option value="Ramanathapuram" id="Ramanathapuram">
							Ramanathapuram						</option>';
											<option value="Ramgarh" id="Ramgarh">
							Ramgarh						</option>';
											<option value="Rampur" id="Rampur">
							Rampur						</option>';
											<option value="Rampurhat" id="Rampurhat">
							Rampurhat						</option>';
											<option value="Ranaghat" id="Ranaghat">
							Ranaghat						</option>';
											<option value="Ranchi" id="Ranchi">
							Ranchi						</option>';
											<option value="Ranebennur" id="Ranebennur">
							Ranebennur						</option>';
											<option value="Raniganj" id="Raniganj">
							Raniganj						</option>';
											<option value="Ranip" id="Ranip">
							Ranip						</option>';
											<option value="Ratangarh" id="Ratangarh">
							Ratangarh						</option>';
											<option value="Rath" id="Rath">
							Rath						</option>';
											<option value="Ratlam" id="Ratlam">
							Ratlam						</option>';
											<option value="Ratnagiri" id="Ratnagiri">
							Ratnagiri						</option>';
											<option value="Rayachoti" id="Rayachoti">
							Rayachoti						</option>';
											<option value="Rayadurg" id="Rayadurg">
							Rayadurg						</option>';
											<option value="Rayagada" id="Rayagada">
							Rayagada						</option>';
											<option value="Renukoot" id="Renukoot">
							Renukoot						</option>';
											<option value="Rewa" id="Rewa">
							Rewa						</option>';
											<option value="Rewari" id="Rewari">
							Rewari						</option>';
											<option value="Rishikesh" id="Rishikesh">
							Rishikesh						</option>';
											<option value="Rishra" id="Rishra">
							Rishra						</option>';
											<option value="Robertsonpet" id="Robertsonpet">
							Robertsonpet						</option>';
											<option value="Rohtak" id="Rohtak">
							Rohtak						</option>';
											<option value="Roorkee" id="Roorkee">
							Roorkee						</option>';
											<option value="Rourkela" id="Rourkela">
							Rourkela						</option>';
											<option value="Rudrapur" id="Rudrapur">
							Rudrapur						</option>';
											<option value="Sagar" id="Sagar">
							Sagar						</option>';
											<option value="Sagara" id="Sagara">
							Sagara						</option>';
											<option value="Saharanpur" id="Saharanpur">
							Saharanpur						</option>';
											<option value="Saharsa" id="Saharsa">
							Saharsa						</option>';
											<option value="Sahaswan" id="Sahaswan">
							Sahaswan						</option>';
											<option value="Sahebganj" id="Sahebganj">
							Sahebganj						</option>';
											<option value="Sainthia" id="Sainthia">
							Sainthia						</option>';
											<option value="Salem" id="Salem">
							Salem						</option>';
											<option value="Samalkota" id="Samalkota">
							Samalkota						</option>';
											<option value="Samastipur" id="Samastipur">
							Samastipur						</option>';
											<option value="Sambalpur" id="Sambalpur">
							Sambalpur						</option>';
											<option value="Sambhal" id="Sambhal">
							Sambhal						</option>';
											<option value="Sangamner" id="Sangamner">
							Sangamner						</option>';
											<option value="Sangareddy" id="Sangareddy">
							Sangareddy						</option>';
											<option value="Sangli" id="Sangli">
							Sangli						</option>';
											<option value="Sangrur" id="Sangrur">
							Sangrur						</option>';
											<option value="Sankarankoil" id="Sankarankoil">
							Sankarankoil						</option>';
											<option value="Sardarshahar" id="Sardarshahar">
							Sardarshahar						</option>';
											<option value="Sarni" id="Sarni">
							Sarni						</option>';
											<option value="Sasaram" id="Sasaram">
							Sasaram						</option>';
											<option value="Satara" id="Satara">
							Satara						</option>';
											<option value="Satna" id="Satna">
							Satna						</option>';
											<option value="Sattenapalle" id="Sattenapalle">
							Sattenapalle						</option>';
											<option value="Saunda" id="Saunda">
							Saunda						</option>';
											<option value="Savarkundla" id="Savarkundla">
							Savarkundla						</option>';
											<option value="SawaiMadhopur" id="SawaiMadhopur">
							SawaiMadhopur						</option>';
											<option value="Secunderabad" id="Secunderabad">
							Secunderabad						</option>';
											<option value="Sehore" id="Sehore">
							Sehore						</option>';
											<option value="Seoni" id="Seoni">
							Seoni						</option>';
											<option value="Serampore" id="Serampore">
							Serampore						</option>';
											<option value="Serilingampally" id="Serilingampally">
							Serilingampally						</option>';
											<option value="Shahabad" id="Shahabad">
							Shahabad						</option>';
											<option value="Shahdol" id="Shahdol">
							Shahdol						</option>';
											<option value="Shahjahanpur" id="Shahjahanpur">
							Shahjahanpur						</option>';
											<option value="Shajapur" id="Shajapur">
							Shajapur						</option>';
											<option value="Shamli" id="Shamli">
							Shamli						</option>';
											<option value="Shantipur" id="Shantipur">
							Shantipur						</option>';
											<option value="Shegaon" id="Shegaon">
							Shegaon						</option>';
											<option value="Sheopur" id="Sheopur">
							Sheopur						</option>';
											<option value="Sherkot" id="Sherkot">
							Sherkot						</option>';
											<option value="Shikohabad" id="Shikohabad">
							Shikohabad						</option>';
											<option value="Shillong" id="Shillong">
							Shillong						</option>';
											<option value="Shimla" id="Shimla">
							Shimla						</option>';
											<option value="Shimoga" id="Shimoga">
							Shimoga						</option>';
											<option value="Shirpur" id="Shirpur">
							Shirpur						</option>';
											<option value="Shivpuri" id="Shivpuri">
							Shivpuri						</option>';
											<option value="Shrirampur" id="Shrirampur">
							Shrirampur						</option>';
											<option value="Siddipet" id="Siddipet">
							Siddipet						</option>';
											<option value="Sidhpur" id="Sidhpur">
							Sidhpur						</option>';
											<option value="Sikandrabad" id="Sikandrabad">
							Sikandrabad						</option>';
											<option value="Sikar" id="Sikar">
							Sikar						</option>';
											<option value="Silchar" id="Silchar">
							Silchar						</option>';
											<option value="Siliguri" id="Siliguri">
							Siliguri						</option>';
											<option value="Silvassa" id="Silvassa">
							Silvassa						</option>';
											<option value="Sindhnur" id="Sindhnur">
							Sindhnur						</option>';
											<option value="Sindri" id="Sindri">
							Sindri						</option>';
											<option value="Singrauli" id="Singrauli">
							Singrauli						</option>';
											<option value="Sira" id="Sira">
							Sira						</option>';
											<option value="Sirhind" id="Sirhind">
							Sirhind						</option>';
											<option value="Sirsa" id="Sirsa">
							Sirsa						</option>';
											<option value="Sirsi" id="Sirsi">
							Sirsi						</option>';
											<option value="Sirsilla" id="Sirsilla">
							Sirsilla						</option>';
											<option value="Sitamarhi" id="Sitamarhi">
							Sitamarhi						</option>';
											<option value="Sitapur" id="Sitapur">
							Sitapur						</option>';
											<option value="Sivakasi" id="Sivakasi">
							Sivakasi						</option>';
											<option value="Sivasagar" id="Sivasagar">
							Sivasagar						</option>';
											<option value="Solan" id="Solan">
							Solan						</option>';
											<option value="Solapur" id="Solapur">
							Solapur						</option>';
											<option value="Sonamukhi" id="Sonamukhi">
							Sonamukhi						</option>';
											<option value="Sonipat" id="Sonipat">
							Sonipat						</option>';
											<option value="Sopore" id="Sopore">
							Sopore						</option>';
											<option value="Srikakulam" id="Srikakulam">
							Srikakulam						</option>';
											<option value="Srikalahasti" id="Srikalahasti">
							Srikalahasti						</option>';
											<option value="SriMuktsarSahib" id="SriMuktsarSahib">
							SriMuktsarSahib						</option>';
											<option value="Srinagar" id="Srinagar">
							Srinagar						</option>';
											<option value="Srivilliputhur" id="Srivilliputhur">
							Srivilliputhur						</option>';
											<option value="Sujangarh" id="Sujangarh">
							Sujangarh						</option>';
											<option value="Sultanpur" id="Sultanpur">
							Sultanpur						</option>';
											<option value="Sunabeda" id="Sunabeda">
							Sunabeda						</option>';
											<option value="Sunam" id="Sunam">
							Sunam						</option>';
											<option value="Supaul" id="Supaul">
							Supaul						</option>';
											<option value="Surat" id="Surat">
							Surat						</option>';
											<option value="Suratgarh" id="Suratgarh">
							Suratgarh						</option>';
											<option value="Surendranagar" id="Surendranagar">
							Surendranagar						</option>';
											<option value="Suri" id="Suri">
							Suri						</option>';
											<option value="Suryapet" id="Suryapet">
							Suryapet						</option>';
											<option value="Tadepalligudem" id="Tadepalligudem">
							Tadepalligudem						</option>';
											<option value="Tadpatri" id="Tadpatri">
							Tadpatri						</option>';
											<option value="Taherpur" id="Taherpur">
							Taherpur						</option>';
											<option value="Taki" id="Taki">
							Taki						</option>';
											<option value="Taliparamba" id="Taliparamba">
							Taliparamba						</option>';
											<option value="Tamluk" id="Tamluk">
							Tamluk						</option>';
											<option value="Tanda" id="Tanda">
							Tanda						</option>';
											<option value="Tandur" id="Tandur">
							Tandur						</option>';
											<option value="Tanuku" id="Tanuku">
							Tanuku						</option>';
											<option value="Tarakeswar" id="Tarakeswar">
							Tarakeswar						</option>';
											<option value="TarnTaranSahib" id="TarnTaranSahib">
							TarnTaranSahib						</option>';
											<option value="Tenali" id="Tenali">
							Tenali						</option>';
											<option value="Tenkasi" id="Tenkasi">
							Tenkasi						</option>';
											<option value="Tezpur" id="Tezpur">
							Tezpur						</option>';
											<option value="Thalassery" id="Thalassery">
							Thalassery						</option>';
											<option value="Thane" id="Thane">
							Thane						</option>';
											<option value="Thanesar" id="Thanesar">
							Thanesar						</option>';
											<option value="Thanjavur" id="Thanjavur">
							Thanjavur						</option>';
											<option value="TheniAllinagaram" id="TheniAllinagaram">
							TheniAllinagaram						</option>';
											<option value="Thiruvarur" id="Thiruvarur">
							Thiruvarur						</option>';
											<option value="Thoothukudi" id="Thoothukudi">
							Thoothukudi						</option>';
											<option value="Thrissur" id="Thrissur">
							Thrissur						</option>';
											<option value="Tikamgarh" id="Tikamgarh">
							Tikamgarh						</option>';
											<option value="Tilhar" id="Tilhar">
							Tilhar						</option>';
											<option value="Tindivanam" id="Tindivanam">
							Tindivanam						</option>';
											<option value="Tinsukia" id="Tinsukia">
							Tinsukia						</option>';
											<option value="Tiptur" id="Tiptur">
							Tiptur						</option>';
											<option value="Tiruchendur" id="Tiruchendur">
							Tiruchendur						</option>';
											<option value="Tiruchengode" id="Tiruchengode">
							Tiruchengode						</option>';
											<option value="Tirunelveli" id="Tirunelveli">
							Tirunelveli						</option>';
											<option value="Tirupathur" id="Tirupathur">
							Tirupathur						</option>';
											<option value="Tirupati" id="Tirupati">
							Tirupati						</option>';
											<option value="Tirupur" id="Tirupur">
							Tirupur						</option>';
											<option value="Tirur" id="Tirur">
							Tirur						</option>';
											<option value="Tiruvalla" id="Tiruvalla">
							Tiruvalla						</option>';
											<option value="Tiruvannamalai" id="Tiruvannamalai">
							Tiruvannamalai						</option>';
											<option value="Tisra" id="Tisra">
							Tisra						</option>';
											<option value="Titagarh" id="Titagarh">
							Titagarh						</option>';
											<option value="Tohana" id="Tohana">
							Tohana						</option>';
											<option value="Tonk" id="Tonk">
							Tonk						</option>';
											<option value="Trichy" id="Trichy">
							Trichy						</option>';
											<option value="Trivandrum" id="Trivandrum">
							Trivandrum						</option>';
											<option value="Tufanganj" id="Tufanganj">
							Tufanganj						</option>';
											<option value="Tumkur" id="Tumkur">
							Tumkur						</option>';
											<option value="Tundla" id="Tundla">
							Tundla						</option>';
											<option value="Tuni" id="Tuni">
							Tuni						</option>';
											<option value="Tura" id="Tura">
							Tura						</option>';
											<option value="Udaipur" id="Udaipur">
							Udaipur						</option>';
											<option value="Udgir" id="Udgir">
							Udgir						</option>';
											<option value="Udhampur" id="Udhampur">
							Udhampur						</option>';
											<option value="Udumalaipettai" id="Udumalaipettai">
							Udumalaipettai						</option>';
											<option value="Udupi" id="Udupi">
							Udupi						</option>';
											<option value="Ujhani" id="Ujhani">
							Ujhani						</option>';
											<option value="Ujjain" id="Ujjain">
							Ujjain						</option>';
											<option value="Uluberia" id="Uluberia">
							Uluberia						</option>';
											<option value="Una" id="Una">
							Una						</option>';
											<option value="Unjha" id="Unjha">
							Unjha						</option>';
											<option value="Unnao" id="Unnao">
							Unnao						</option>';
											<option value="Upleta" id="Upleta">
							Upleta						</option>';
											<option value="Uppal" id="Uppal">
							Uppal						</option>';
											<option value="UranIslampur" id="UranIslampur">
							UranIslampur						</option>';
											<option value="Uttarpara" id="Uttarpara">
							Uttarpara						</option>';
											<option value="Vadodara" id="Vadodara">
							Vadodara						</option>';
											<option value="Valparai" id="Valparai">
							Valparai						</option>';
											<option value="Valsad" id="Valsad">
							Valsad						</option>';
											<option value="Vaniyambadi" id="Vaniyambadi">
							Vaniyambadi						</option>';
											<option value="Vapi" id="Vapi">
							Vapi						</option>';
											<option value="Varanasi" id="Varanasi">
							Varanasi						</option>';
											<option value="VasaiVirar" id="VasaiVirar">
							VasaiVirar						</option>';
											<option value="Vejalpur" id="Vejalpur">
							Vejalpur						</option>';
											<option value="Vellore" id="Vellore">
							Vellore						</option>';
											<option value="Veraval" id="Veraval">
							Veraval						</option>';
											<option value="Vidisha" id="Vidisha">
							Vidisha						</option>';
											<option value="Vijalpor" id="Vijalpor">
							Vijalpor						</option>';
											<option value="Vijayawada" id="Vijayawada">
							Vijayawada						</option>';
											<option value="Viluppuram" id="Viluppuram">
							Viluppuram						</option>';
											<option value="Vinukonda" id="Vinukonda">
							Vinukonda						</option>';
											<option value="Viramgam" id="Viramgam">
							Viramgam						</option>';
											<option value="Virudhachalam" id="Virudhachalam">
							Virudhachalam						</option>';
											<option value="Virudhunagar" id="Virudhunagar">
							Virudhunagar						</option>';
											<option value="Visnagar" id="Visnagar">
							Visnagar						</option>';
											<option value="Vizag" id="Vizag">
							Vizag						</option>';
											<option value="Vizianagaram" id="Vizianagaram">
							Vizianagaram						</option>';
											<option value="Vrindavan" id="Vrindavan">
							Vrindavan						</option>';
											<option value="Wanaparthi" id="Wanaparthi">
							Wanaparthi						</option>';
											<option value="Wani" id="Wani">
							Wani						</option>';
											<option value="Warangal" id="Warangal">
							Warangal						</option>';
											<option value="Wardha" id="Wardha">
							Wardha						</option>';
											<option value="Washim" id="Washim">
							Washim						</option>';
											<option value="Yadgir" id="Yadgir">
							Yadgir						</option>';
											<option value="Yamunanagar" id="Yamunanagar">
							Yamunanagar						</option>';
											<option value="Yavatmal" id="Yavatmal">
							Yavatmal						</option>';
											<option value="Yemmiganur" id="Yemmiganur">
							Yemmiganur						</option>';
									</select>
                        </div>
						<div class="field-row">
                            <label>Address</label>
                            <textarea class="le-input" rows="6" name="caddress"></textarea>
                        </div>
						<div class="field-row">
                            <label>Pincode</label>
                            <input type="text" class="le-input" maxlength="6" name="cpincode">
                        </div>
                        <div class="buttons-holder">
                            <button type="submit" class="le-button huge" name="regcompany">Sign Up</button>
                        </div><!-- /.buttons-holder -->
					</form>
					
					
					
					<form role="form"  class="register-form cf-style-1" name="userform" id="userform" method="post" onSubmit="return chkUserForm();">
						<div class="field-row">
                           
                            <label>Name</label>
                            <input type="text" class="le-input" name="name">
							<p>*minimum 6 characters</p>
                        </div><!-- /.field-row -->
						<div class="field-row">
                            <label>User Name</label>
                            <input type="text" class="le-input" name="uname">
							<p>*minimum 6 characters</p>
                        </div>
						<div class="field-row">
                            <label>Password</label>
                            <input type="password" class="le-input" name="password">
							<p>*minimum 8 characters</p>
                        </div>
						<div class="field-row">
                            <label>Confirm Password</label>
                            <input type="password" class="le-input" name="cnpassword">
                        </div>
						<div class="field-row">
                            <label>Email</label>
                            <input type="text" class="le-input" name="email">
                        </div>
						<div class="field-row">
                            <label>Contact No</label>
                            <input type="text" class="le-input" name="contact" maxlength="10">
                        </div>
						<div class="field-row">
                            <label>City</label>
                            <select  name="city">
					<option value="default" label="Select City" selected class="le-select">Select City</option>';
				
											<option value="Aarani" id="Arani">
							Aarani						</option>';
											<option value="Abohar" id="Abohar">
							Abohar						</option>';
											<option value="Achalpur" id="Achalpur">
							Achalpur						</option>';
											<option value="Adilabad" id="Adilabad">
							Adilabad						</option>';
											<option value="Adityapur" id="Adityapur">
							Adityapur						</option>';
											<option value="Adoni" id="Adoni">
							Adoni						</option>';
											<option value="Agartala" id="Agartala">
							Agartala						</option>';
											<option value="Agra" id="Agra">
							Agra						</option>';
											<option value="Ahmedabad" id="Ahmedabad">
							Ahmedabad						</option>';
											<option value="Ahmednagar" id="Ahmednagar">
							Ahmednagar						</option>';
											<option value="Aizawl" id="Aizawl">
							Aizawl						</option>';
											<option value="Ajmer" id="Ajmer">
							Ajmer						</option>';
											<option value="Akola" id="Akola">
							Akola						</option>';
											<option value="Akot" id="Akot">
							Akot						</option>';
											<option value="Alappuzha" id="Alappuzha">
							Alappuzha						</option>';
											<option value="Aligarh" id="Aligarh">
							Aligarh						</option>';
											<option value="Alipurduar" id="Alipurduar">
							Alipurduar						</option>';
											<option value="Allahabad" id="Allahabad">
							Allahabad						</option>';
											<option value="Almora" id="Almora">
							Almora						</option>';
											<option value="Alwar" id="Alwar">
							Alwar						</option>';
											<option value="Amalapuram" id="Amalapuram">
							Amalapuram						</option>';
											<option value="Amalner" id="Amalner">
							Amalner						</option>';
											<option value="Ambajogai" id="Ambajogai">
							Ambajogai						</option>';
											<option value="Ambala" id="Ambala">
							Ambala						</option>';
											<option value="AmbalaSadar" id="AmbalaSadar">
							AmbalaSadar						</option>';
											<option value="Ambasamudram" id="Ambasamudram">
							Ambasamudram						</option>';
											<option value="Ambikapur" id="Ambikapur">
							Ambikapur						</option>';
											<option value="Ambur" id="Ambur">
							Ambur						</option>';
											<option value="Amravati" id="Amravati">
							Amravati						</option>';
											<option value="Amreli" id="Amreli">
							Amreli						</option>';
											<option value="Amritsar" id="Amritsar">
							Amritsar						</option>';
											<option value="Amroha" id="Amroha">
							Amroha						</option>';
											<option value="Anakapalle" id="Anakapalle">
							Anakapalle						</option>';
											<option value="Anand" id="Anand">
							Anand						</option>';
											<option value="Anantapur" id="Anantapur">
							Anantapur						</option>';
											<option value="Anantnag" id="Anantnag">
							Anantnag						</option>';
											<option value="Anjangaon" id="Anjangaon">
							Anjangaon						</option>';
											<option value="Anjar" id="Anjar">
							Anjar						</option>';
											<option value="Ankleshwar" id="Ankleshwar">
							Ankleshwar						</option>';
											<option value="Arakkonam" id="Arakkonam">
							Arakkonam						</option>';
											<option value="Arambag" id="Arambag">
							Arambag						</option>';
											<option value="Araria" id="Araria">
							Araria						</option>';
											<option value="Arcot" id="Arcot">
							Arcot						</option>';
											<option value="Arrah" id="Arrah">
							Arrah						</option>';
											<option value="Aruppukkottai" id="Aruppukkottai">
							Aruppukkottai						</option>';
											<option value="Asansol" id="Asansol">
							Asansol						</option>';
											<option value="Ashoknagar" id="Ashoknagar">
							Ashoknagar						</option>';
											<option value="AshoknagarKalyangarh" id="AshoknagarKalyangarh">
							AshoknagarKalyangarh						</option>';
											<option value="Attur" id="Attur">
							Attur						</option>';
											<option value="Auraiya" id="Auraiya">
							Auraiya						</option>';
											<option value="Aurangabad" id="Aurangabad">
							Aurangabad						</option>';
											<option value="Avaniapuram" id="Avaniapuram">
							Avaniapuram						</option>';
											<option value="Azamgarh" id="Azamgarh">
							Azamgarh						</option>';
											<option value="Badlapur" id="Badlapur">
							Badlapur						</option>';
											<option value="Bagaha" id="Bagaha">
							Bagaha						</option>';
											<option value="Bagalkot" id="Bagalkot">
							Bagalkot						</option>';
											<option value="Bagbera" id="Bagbera">
							Bagbera						</option>';
											<option value="Bahadurgarh" id="Bahadurgarh">
							Bahadurgarh						</option>';
											<option value="Baharampur" id="Baharampur">
							Baharampur						</option>';
											<option value="Baheri" id="Baheri">
							Baheri						</option>';
											<option value="Bahraich" id="Bahraich">
							Bahraich						</option>';
											<option value="Baidyabati" id="Baidyabati">
							Baidyabati						</option>';
											<option value="Balaghat" id="Balaghat">
							Balaghat						</option>';
											<option value="Balangir" id="Balangir">
							Balangir						</option>';
											<option value="Balasore" id="Balasore">
							Balasore						</option>';
											<option value="Ballarpur" id="Ballarpur">
							Ballarpur						</option>';
											<option value="Ballia" id="Ballia">
							Ballia						</option>';
											<option value="Bally" id="Bally">
							Bally						</option>';
											<option value="Balotra" id="Balotra">
							Balotra						</option>';
											<option value="Balrampur" id="Balrampur">
							Balrampur						</option>';
											<option value="Balurghat" id="Balurghat">
							Balurghat						</option>';
											<option value="Banda" id="Banda">
							Banda						</option>';
											<option value="Bangalore" id="Bangalore">
							Bangalore						</option>';
											<option value="Bankura" id="Bankura">
							Bankura						</option>';
											<option value="Bansberia" id="Bansberia">
							Bansberia						</option>';
											<option value="Banswara" id="Banswara">
							Banswara						</option>';
											<option value="Bapatla" id="Bapatla">
							Bapatla						</option>';
											<option value="Baramati" id="Baramati">
							Baramati						</option>';
											<option value="Barabanki" id="Barabanki">
							Barabanki						</option>';
											<option value="Baramulla" id="Baramulla">
							Baramulla						</option>';
											<option value="Baran" id="Baran">
							Baran						</option>';
											<option value="Baranagar" id="Baranagar">
							Baranagar						</option>';
											<option value="Barasat" id="Barasat">
							Barasat						</option>';
											<option value="Baraut" id="Baraut">
							Baraut						</option>';
											<option value="Barbil" id="Barbil">
							Barbil						</option>';
											<option value="Bardhaman" id="Bardhaman">
							Bardhaman						</option>';
											<option value="Bardoli" id="Bardoli">
							Bardoli						</option>';
											<option value="Bareilly" id="Bareilly">
							Bareilly						</option>';
											<option value="Bargarh" id="Bargarh">
							Bargarh						</option>';
											<option value="Bari" id="Bari">
							Bari						</option>';
											<option value="Baripada" id="Baripada">
							Baripada						</option>';
											<option value="Barmer" id="Barmer">
							Barmer						</option>';
											<option value="Barnala" id="Barnala">
							Barnala						</option>';
											<option value="Barrackpore" id="Barrackpore">
							Barrackpore						</option>';
											<option value="Barshi" id="Barshi">
							Barshi						</option>';
											<option value="Baruipur" id="Baruipur">
							Baruipur						</option>';
											<option value="Basavakalyan" id="Basavakalyan">
							Basavakalyan						</option>';
											<option value="Basirhat" id="Basirhat">
							Basirhat						</option>';
											<option value="Basmath" id="Basmath">
							Basmath						</option>';
											<option value="Basti" id="Basti">
							Basti						</option>';
											<option value="Batala" id="Batala">
							Batala						</option>';
											<option value="Bathinda" id="Bathinda">
							Bathinda						</option>';
											<option value="Beawar" id="Beawar">
							Beawar						</option>';
											<option value="Beed" id="Beed">
							Beed						</option>';
											<option value="Begusarai" id="Begusarai">
							Begusarai						</option>';
											<option value="BehtaHajipur" id="BehtaHajipur">
							BehtaHajipur						</option>';
											<option value="BelaPratapgarh" id="BelaPratapgarh">
							BelaPratapgarh						</option>';
											<option value="Beldanga" id="Beldanga">
							Beldanga						</option>';
											<option value="Belgaum" id="Belgaum">
							Belgaum						</option>';
											<option value="Bellampalle" id="Bellampalle">
							Bellampalle						</option>';
											<option value="Bellary" id="Bellary">
							Bellary						</option>';
											<option value="Bettiah" id="Bettiah">
							Bettiah						</option>';
											<option value="Betul" id="Betul">
							Betul						</option>';
											<option value="Bhadohi" id="Bhadohi">
							Bhadohi						</option>';
											<option value="Bhadrak" id="Bhadrak">
							Bhadrak						</option>';
											<option value="Bhadravathi" id="Bhadravathi">
							Bhadravathi						</option>';
											<option value="Bhadravati" id="Bhadravati">
							Bhadravati						</option>';
											<option value="Bhadreswar" id="Bhadreswar">
							Bhadreswar						</option>';
											<option value="Bhagalpur" id="Bhagalpur">
							Bhagalpur						</option>';
											<option value="Bhandara" id="Bhandara">
							Bhandara						</option>';
											<option value="Bharatpur" id="Bharatpur">
							Bharatpur						</option>';
											<option value="Bharuch" id="Bharuch">
							Bharuch						</option>';
											<option value="Bhatapara" id="Bhatapara">
							Bhatapara						</option>';
											<option value="Bhatpara" id="Bhatpara">
							Bhatpara						</option>';
											<option value="Bhavani" id="Bhavani">
							Bhavani						</option>';
											<option value="Bhavnagar" id="Bhavnagar">
							Bhavnagar						</option>';
											<option value="Bhawanipatna" id="Bhawanipatna">
							Bhawanipatna						</option>';
											<option value="Bhilai" id="Bhilai">
							Bhilai						</option>';
											<option value="BhilaiCharoda" id="BhilaiCharoda">
							BhilaiCharoda						</option>';
											<option value="Bhilwara" id="Bhilwara">
							Bhilwara						</option>';
											<option value="Bhimavaram" id="Bhimavaram">
							Bhimavaram						</option>';
											<option value="Bhind" id="Bhind">
							Bhind						</option>';
											<option value="Bhiwani" id="Bhiwani">
							Bhiwani						</option>';
											<option value="Bhopal" id="Bhopal">
							Bhopal						</option>';
											<option value="Bhubaneswar" id="Bhubaneswar">
							Bhubaneswar						</option>';
											<option value="Bhuj" id="Bhuj">
							Bhuj						</option>';
											<option value="Bhuli" id="Bhuli">
							Bhuli						</option>';
											<option value="Bhusawal" id="Bhusawal">
							Bhusawal						</option>';
											<option value="Bidar" id="Bidar">
							Bidar						</option>';
											<option value="Bidhannagar" id="Bidhannagar">
							Bidhannagar						</option>';
											<option value="Bijapur" id="Bijapur">
							Bijapur						</option>';
											<option value="Bijnor" id="Bijnor">
							Bijnor						</option>';
											<option value="Bikaner" id="Bikaner">
							Bikaner						</option>';
											<option value="Bilaspur" id="Bilaspur">
							Bilaspur						</option>';
											<option value="Bilimora" id="Bilimora">
							Bilimora						</option>';
											<option value="BinaEtawa" id="BinaEtawa">
							BinaEtawa						</option>';
											<option value="Birnagar" id="Birnagar">
							Birnagar						</option>';
											<option value="Bisalpur" id="Bisalpur">
							Bisalpur						</option>';
											<option value="Bishnupur" id="Bishnupur">
							Bishnupur						</option>';
											<option value="Bobbili" id="Bobbili">
							Bobbili						</option>';
											<option value="Bodhan" id="Bodhan">
							Bodhan						</option>';
											<option value="Bodinayakkanur" id="Bodinayakkanur">
							Bodinayakkanur						</option>';
											<option value="BokaroSteelCity" id="BokaroSteelCity">
							BokaroSteelCity						</option>';
											<option value="BolpurSantiniketan" id="BolpurSantiniketan">
							BolpurSantiniketan						</option>';
											<option value="Bongaigaon" id="Bongaigaon">
							Bongaigaon						</option>';
											<option value="Bongaon" id="Bongaon">
							Bongaon						</option>';
											<option value="Borsad" id="Borsad">
							Borsad						</option>';
											<option value="Botad" id="Botad">
							Botad						</option>';
											<option value="Brahmapur" id="Brahmapur">
							Brahmapur						</option>';
											<option value="Brajarajnagar" id="Brajarajnagar">
							Brajarajnagar						</option>';
											<option value="Budaun" id="Budaun">
							Budaun						</option>';
											<option value="BudgeBudge" id="BudgeBudge">
							BudgeBudge						</option>';
											<option value="Bulandshahr" id="Bulandshahr">
							Bulandshahr						</option>';
											<option value="Buldhana" id="Buldhana">
							Buldhana						</option>';
											<option value="Bundi" id="Bundi">
							Bundi						</option>';
											<option value="Burhanpur" id="Burhanpur">
							Burhanpur						</option>';
											<option value="Buxar" id="Buxar">
							Buxar						</option>';
											<option value="Chaibasa" id="Chaibasa">
							Chaibasa						</option>';
											<option value="Chakdaha" id="Chakdaha">
							Chakdaha						</option>';
											<option value="Chakradharpur" id="Chakradharpur">
							Chakradharpur						</option>';
											<option value="Chalisgaon" id="Chalisgaon">
							Chalisgaon						</option>';
											<option value="Chamba" id="Chamba">
							Chamba						</option>';
											<option value="Champdani" id="Champdani">
							Champdani						</option>';
											<option value="Chamrajnagar" id="Chamrajnagar">
							Chamrajnagar						</option>';
											<option value="Chandannagar" id="Chandannagar">
							Chandannagar						</option>';
											<option value="Chandausi" id="Chandausi">
							Chandausi						</option>';
											<option value="Chandigarh" id="Chandigarh">
							Chandigarh						</option>';
											<option value="Chandkheda" id="Chandkheda">
							Chandkheda						</option>';
											<option value="Chandlodiya" id="Chandlodiya">
							Chandlodiya						</option>';
											<option value="Chandpur" id="Chandpur">
							Chandpur						</option>';
											<option value="Chandrapur" id="Chandrapur">
							Chandrapur						</option>';
											<option value="Chandrokona" id="Chandrokona">
							Chandrokona						</option>';
											<option value="Changanacherry" id="Changanacherry">
							Changanacherry						</option>';
											<option value="Channapatna" id="Channapatna">
							Channapatna						</option>';
											<option value="Chapra" id="Chapra">
							Chapra						</option>';
											<option value="Chengalpattu" id="Chengalpattu">
							Chengalpattu						</option>';
											<option value="Chennai" id="Chennai">

							Chennai						</option>';
											<option value="Cherthala" id="Cherthala">
							Cherthala						</option>';
											<option value="Chhatarpur" id="Chhatarpur">
							Chhatarpur						</option>';
											<option value="Chhibramau" id="Chhibramau">
							Chhibramau						</option>';
											<option value="Chhindwara" id="Chhindwara">
							Chhindwara						</option>';
											<option value="Chidambaram" id="Chidambaram">
							Chidambaram						</option>';
											<option value="Chikkaballapur" id="Chikkaballapur">
							Chikkaballapur						</option>';
											<option value="Chikmagalur" id="Chikmagalur">
							Chikmagalur						</option>';
											<option value="Chilakalurupet" id="Chilakalurupet">
							Chilakalurupet						</option>';
											<option value="Chinnachowk" id="Chinnachowk">
							Chinnachowk						</option>';
											<option value="Chintamani" id="Chintamani">
							Chintamani						</option>';
											<option value="Chirala" id="Chirala">
							Chirala						</option>';
											<option value="Chirkunda" id="Chirkunda">
							Chirkunda						</option>';
											<option value="Chirmiri" id="Chirmiri">
							Chirmiri						</option>';
											<option value="Chitradurga" id="Chitradurga">
							Chitradurga						</option>';
											<option value="Chittoor" id="Chittoor">
							Chittoor						</option>';
											<option value="Chittorgarh" id="Chittorgarh">
							Chittorgarh						</option>';
											<option value="Chittur" id="Chittur">
							Chittur						</option>';
											<option value="Chomu" id="Chomu">
							Chomu						</option>';
											<option value="Chopda" id="Chopda">
							Chopda						</option>';
											<option value="Churu" id="Churu">
							Churu						</option>';
											<option value="Coimbatore" id="Coimbatore">
							Coimbatore						</option>';
											<option value="Contai" id="Contai">
							Contai						</option>';
											<option value="CoochBehar" id="CoochBehar">
							CoochBehar						</option>';
											<option value="Coonoor" id="Coonoor">
							Coonoor						</option>';
											<option value="CoopersCamp" id="CoopersCamp">
							CoopersCamp						</option>';
											<option value="Cuddalore" id="Cuddalore">
							Cuddalore						</option>';
											<option value="Cuddapah" id="Cuddapah">
							Cuddapah						</option>';
											<option value="Cuttack" id="Cuttack">
							Cuttack						</option>';
											<option value="Dabhoi" id="Dabhoi">
							Dabhoi						</option>';
											<option value="Dabra" id="Dabra">
							Dabra						</option>';
											<option value="Dadri" id="Dadri">
							Dadri						</option>';
											<option value="Dahod" id="Dahod">
							Dahod						</option>';
											<option value="Dainhat" id="Dainhat">
							Dainhat						</option>';
											<option value="Dalhousie" id="Dalhousie">
							Dalhousie						</option>';
											<option value="Dalkhola" id="Dalkhola">
							Dalkhola						</option>';
											<option value="DalliRajhara" id="DalliRajhara">
							DalliRajhara						</option>';
											<option value="Daltonganj" id="Daltonganj">
							Daltonganj						</option>';
											<option value="Daman" id="Daman">
							Daman						</option>';
											<option value="Damoh" id="Damoh">
							Damoh						</option>';
											<option value="Dandeli" id="Dandeli">
							Dandeli						</option>';
											<option value="Darbhanga" id="Darbhanga">
							Darbhanga						</option>';
											<option value="Darjeeling" id="Darjeeling">
							Darjeeling						</option>';
											<option value="Datia" id="Datia">
							Datia						</option>';
											<option value="Dausa" id="Dausa">
							Dausa						</option>';
											<option value="Davanagere" id="Davanagere">
							Davanagere						</option>';
											<option value="Deesa" id="Deesa">
							Deesa						</option>';
											<option value="Dehradun" id="Dehradun">
							Dehradun						</option>';
											<option value="DehrionSone" id="DehrionSone">
							DehrionSone						</option>';
											<option value="Delhi" id="Delhi">
							Delhi						</option>';
											<option value="Deoband" id="Deoband">
							Deoband						</option>';
											<option value="Deoghar" id="Deoghar">
							Deoghar						</option>';
											<option value="Deolali" id="Deolali">
							Deolali						</option>';
											<option value="Deoria" id="Deoria">
							Deoria						</option>';
											<option value="Devarshola" id="Devarshola">
							Devarshola						</option>';
											<option value="Dewas" id="Dewas">
							Dewas						</option>';
											<option value="Dhamtari" id="Dhamtari">
							Dhamtari						</option>';
											<option value="Dhanbad" id="Dhanbad">
							Dhanbad						</option>';
											<option value="Dhanpuri" id="Dhanpuri">
							Dhanpuri						</option>';
											<option value="Dhar" id="Dhar">
							Dhar						</option>';
											<option value="Dharampur" id="Dharampur">
							Dharampur						</option>';
											<option value="Dharapuram" id="Dharapuram">
							Dharapuram						</option>';
											<option value="Dharamsala" id="Dharamsala">
							Dharamsala						</option>';
											<option value="Dharmapuri" id="Dharmapuri">
							Dharmapuri						</option>';
											<option value="Dharmavaram" id="Dharmavaram">
							Dharmavaram						</option>';
											<option value="Dhenkanal" id="Dhenkanal">
							Dhenkanal						</option>';
											<option value="Dholka" id="Dholka">
							Dholka						</option>';
											<option value="Dholpur" id="Dholpur">
							Dholpur						</option>';
											<option value="Dhoraji" id="Dhoraji">
							Dhoraji						</option>';
											<option value="Dhrangadhra" id="Dhrangadhra">
							Dhrangadhra						</option>';
											<option value="Dhubri" id="Dhubri">
							Dhubri						</option>';
											<option value="Dhule" id="Dhule">
							Dhule						</option>';
											<option value="Dhulian" id="Dhulian">
							Dhulian						</option>';
											<option value="Dhupguri" id="Dhupguri">
							Dhupguri						</option>';
											<option value="DiamondHarbour" id="DiamondHarbour">
							DiamondHarbour						</option>';
											<option value="Dibrugarh" id="Dibrugarh">
							Dibrugarh						</option>';
											<option value="Dimapur" id="Dimapur">
							Dimapur						</option>';
											<option value="DinapurNizamat" id="DinapurNizamat">
							DinapurNizamat						</option>';
											<option value="Dindigul" id="Dindigul">
							Dindigul						</option>';
											<option value="Diphu" id="Diphu">
							Diphu						</option>';
											<option value="Dispur" id="Dispur">
							Dispur						</option>';
											<option value="Diu" id="Diu">
							Diu						</option>';
											<option value="Doddaballapur" id="Doddaballapur">
							Doddaballapur						</option>';
											<option value="Dubrajpur" id="Dubrajpur">
							Dubrajpur						</option>';
											<option value="Dumdum" id="Dumdum">
							Dumdum						</option>';
											<option value="Durg" id="Durg">
							Durg						</option>';
											<option value="Durgapur" id="Durgapur">
							Durgapur						</option>';
											<option value="Dwarka" id="Dwarka">
							Dwarka						</option>';
											<option value="Edathala" id="Edathala">
							Edathala						</option>';
											<option value="Egra" id="Egra">
							Egra						</option>';
											<option value="Eluru" id="Eluru">
							Eluru						</option>';
											<option value="EnglishBazar" id="EnglishBazar">
							EnglishBazar						</option>';
											<option value="Erode" id="Erode">
							Erode						</option>';
											<option value="Etah" id="Etah">
							Etah						</option>';
											<option value="Etawah" id="Etawah">
							Etawah						</option>';
											<option value="Faizabad" id="Faizabad">
							Faizabad						</option>';
											<option value="Faridabad" id="Faridabad">
							Faridabad						</option>';
											<option value="Faridkot" id="Faridkot">
							Faridkot						</option>';
											<option value="Faridpur" id="Faridpur">
							Faridpur						</option>';
											<option value="Farrukhabad" id="Farrukhabad">
							Farrukhabad						</option>';
											<option value="Fatehabad" id="Fatehabad">
							Fatehabad						</option>';
											<option value="Fatehpur" id="Fatehpur">
							Fatehpur						</option>';
											<option value="Fazilka" id="Fazilka">
							Fazilka						</option>';
											<option value="Firozabad" id="Firozabad">
							Firozabad						</option>';
											<option value="Firozpur" id="Firozpur">
							Firozpur						</option>';
											<option value="FirozpurCantonment" id="FirozpurCantonment">
							FirozpurCantonment						</option>';
											<option value="Gadag" id="Gadag">
							Gadag						</option>';
											<option value="GaddiAnnaram" id="GaddiAnnaram">
							GaddiAnnaram						</option>';
											<option value="Gadwal" id="Gadwal">
							Gadwal						</option>';
											<option value="Gandhidham" id="Gandhidham">
							Gandhidham						</option>';
											<option value="Gandhinagar" id="Gandhinagar">
							Gandhinagar						</option>';
											<option value="Gangaghat" id="Gangaghat">
							Gangaghat						</option>';
											<option value="Ganganagar" id="Ganganagar">
							Ganganagar						</option>';
											<option value="GangapurCity" id="GangapurCity">
							GangapurCity						</option>';
											<option value="Gangarampur" id="Gangarampur">
							Gangarampur						</option>';
											<option value="Gangavathi" id="Gangavathi">
							Gangavathi						</option>';
											<option value="Gangoh" id="Gangoh">
							Gangoh						</option>';
											<option value="Gangtok" id="Gangtok">
							Gangtok						</option>';
											<option value="Garulia" id="Garulia">
							Garulia						</option>';
											<option value="Gaya" id="Gaya">
							Gaya						</option>';
											<option value="Ghatal" id="Ghatal">
							Ghatal						</option>';
											<option value="Ghatlodiya" id="Ghatlodiya">
							Ghatlodiya						</option>';
											<option value="Ghaziabad" id="Ghaziabad">
							Ghaziabad						</option>';
											<option value="Ghazipur" id="Ghazipur">
							Ghazipur						</option>';
											<option value="Giridih" id="Giridih">
							Giridih						</option>';
											<option value="Goa" id="Goa">
							Goa						</option>';
											<option value="Gobardanga" id="Gobardanga">
							Gobardanga						</option>';
											<option value="Gobichettipalayam" id="Gobichettipalayam">
							Gobichettipalayam						</option>';
											<option value="Godhra" id="Godhra">
							Godhra						</option>';
											<option value="Gokak" id="Gokak">
							Gokak						</option>';
											<option value="GolaGokarannath" id="GolaGokarannath">
							GolaGokarannath						</option>';
											<option value="Gonda" id="Gonda">
							Gonda						</option>';
											<option value="Gondal" id="Gondal">
							Gondal						</option>';
											<option value="Gondia" id="Gondia">
							Gondia						</option>';
											<option value="Gopalganj" id="Gopalganj">
							Gopalganj						</option>';
											<option value="Gorakhpur" id="Gorakhpur">
							Gorakhpur						</option>';
											<option value="GreaterNoida" id="GreaterNoida">
							GreaterNoida						</option>';
											<option value="Gudivada" id="Gudivada">
							Gudivada						</option>';
											<option value="Gudiyatham" id="Gudiyatham">
							Gudiyatham						</option>';
											<option value="Gudur" id="Gudur">
							Gudur						</option>';
											<option value="Gulbarga" id="Gulbarga">
							Gulbarga						</option>';
											<option value="Guna" id="Guna">
							Guna						</option>';
											<option value="Guntakal" id="Guntakal">
							Guntakal						</option>';
											<option value="Guntur" id="Guntur">
							Guntur						</option>';
											<option value="Gurdaspur" id="Gurdaspur">
							Gurdaspur						</option>';
											<option value="Gurgaon" id="Gurgaon">
							Gurgaon						</option>';
											<option value="Guskara" id="Guskara">
							Guskara						</option>';
											<option value="Guwahati" id="Guwahati">
							Guwahati						</option>';
											<option value="Gwalior" id="Gwalior">
							Gwalior						</option>';
											<option value="Habra" id="Habra">
							Habra						</option>';
											<option value="Hajipur" id="Hajipur">
							Hajipur						</option>';
											<option value="Haldia" id="Haldia">
							Haldia						</option>';
											<option value="Haldibari" id="Haldibari">
							Haldibari						</option>';
											<option value="Haldwani" id="Haldwani">
							Haldwani						</option>';
											<option value="Halisahar" id="Halisahar">
							Halisahar						</option>';
											<option value="Hansi" id="Hansi">
							Hansi						</option>';
											<option value="Hanumangarh" id="Hanumangarh">
							Hanumangarh						</option>';
											<option value="Hapur" id="Hapur">
							Hapur						</option>';
											<option value="Harda" id="Harda">
							Harda						</option>';
											<option value="Hardoi" id="Hardoi">
							Hardoi						</option>';
											<option value="Hardwar" id="Hardwar">
							Hardwar						</option>';
											<option value="Harihar" id="Harihar">
							Harihar						</option>';
											<option value="Hasanpur" id="Hasanpur">
							Hasanpur						</option>';
											<option value="Hassan" id="Hassan">
							Hassan						</option>';
											<option value="Hathras" id="Hathras">
							Hathras						</option>';
											<option value="Haveri" id="Haveri">
							Haveri						</option>';
											<option value="Hazaribag" id="Hazaribag">
							Hazaribag						</option>';
											<option value="Himatnagar" id="Himatnagar">
							Himatnagar						</option>';
											<option value="Hindaun" id="Hindaun">
							Hindaun						</option>';
											<option value="Hindupur" id="Hindupur">
							Hindupur						</option>';
											<option value="Hinganghat" id="Hinganghat">
							Hinganghat						</option>';
											<option value="Hingoli" id="Hingoli">
							Hingoli						</option>';
											<option value="Hisar" id="Hisar">
							Hisar						</option>';
											<option value="Hoshangabad" id="Hoshangabad">
							Hoshangabad						</option>';
											<option value="Hoshiarpur" id="Hoshiarpur">
							Hoshiarpur						</option>';
											<option value="Hospet" id="Hospet">
							Hospet						</option>';
											<option value="Hosur" id="Hosur">
							Hosur						</option>';
											<option value="Howrah" id="Howrah">
							Howrah						</option>';
											<option value="Hubli" id="Hubli">
							Hubli						</option>';
											<option value="HugliChuchura" id="HugliChuchura">
							HugliChuchura						</option>';
											<option value="Hyderabad" id="Hyderabad">
							Hyderabad						</option>';
											<option value="Ichalkaranji" id="Ichalkaranji">
							Ichalkaranji						</option>';
											<option value="Ilkal" id="Ilkal">
							Ilkal						</option>';
											<option value="Imphal" id="Imphal">
							Imphal						</option>';
											<option value="Indore" id="Indore">
							Indore						</option>';
											<option value="Islampur" id="Islampur">
							Islampur						</option>';
											<option value="Itanagar" id="Itanagar">
							Itanagar						</option>';
											<option value="Itarsi" id="Itarsi">
							Itarsi						</option>';
											<option value="Jabalpur" id="Jabalpur">
							Jabalpur						</option>';
											<option value="Jagadhri" id="Jagadhri">
							Jagadhri						</option>';
											<option value="Jagdalpur" id="Jagdalpur">
							Jagdalpur						</option>';
											<option value="Jagraon" id="Jagraon">
							Jagraon						</option>';
											<option value="Jagtial" id="Jagtial">
							Jagtial						</option>';
											<option value="Jahangirabad" id="Jahangirabad">
							Jahangirabad						</option>';
											<option value="Jaipur" id="Jaipur">
							Jaipur						</option>';
											<option value="Jaisalmer" id="Jaisalmer">
							Jaisalmer						</option>';
											<option value="Jalandhar" id="Jalandhar">
							Jalandhar						</option>';
											<option value="Jalgaon" id="Jalgaon">
							Jalgaon						</option>';
											<option value="Jalna" id="Jalna">
							Jalna						</option>';
											<option value="Jalpaiguri" id="Jalpaiguri">
							Jalpaiguri						</option>';
											<option value="Jamakhandi" id="Jamakhandi">
							Jamakhandi						</option>';
											<option value="Jamalpur" id="Jamalpur">
							Jamalpur						</option>';
											<option value="Jammu" id="Jammu">
							Jammu						</option>';
											<option value="Jamnagar" id="Jamnagar">
							Jamnagar						</option>';
											<option value="Jamshedpur" id="Jamshedpur">
							Jamshedpur						</option>';
											<option value="Jamui" id="Jamui">
							Jamui						</option>';
											<option value="Jamuria" id="Jamuria">
							Jamuria						</option>';
											<option value="Jaora" id="Jaora">
							Jaora						</option>';
											<option value="Jatani" id="Jatani">
							Jatani						</option>';
											<option value="Jaunpur" id="Jaunpur">
							Jaunpur						</option>';
											<option value="JaynagarMazilpur" id="JaynagarMazilpur">
							JaynagarMazilpur						</option>';
											<option value="Jehanabad" id="Jehanabad">
							Jehanabad						</option>';
											<option value="Jetpur" id="Jetpur">
							Jetpur						</option>';
											<option value="Jeypore" id="Jeypore">
							Jeypore						</option>';
											<option value="Jhalda" id="Jhalda">
							Jhalda						</option>';
											<option value="Jhansi" id="Jhansi">
							Jhansi						</option>';
											<option value="Jhargram" id="Jhargram">
							Jhargram						</option>';
											<option value="Jharia" id="Jharia">
							Jharia						</option>';
											<option value="Jharsuguda" id="Jharsuguda">
							Jharsuguda						</option>';
											<option value="Jhajjar" id="Jhajjar">
							Jhajjar						</option>';
											<option value="JhumriTelaiya" id="JhumriTelaiya">
							JhumriTelaiya						</option>';
											<option value="Jhunjhunu" id="Jhunjhunu">
							Jhunjhunu						</option>';
											<option value="JiaganjAzimganj" id="JiaganjAzimganj">
							JiaganjAzimganj						</option>';
											<option value="Jind" id="Jind">
							Jind						</option>';
											<option value="Jodhpur" id="Jodhpur">
							Jodhpur						</option>';
											<option value="Jorapokhar" id="Jorapokhar">
							Jorapokhar						</option>';
											<option value="Jorhat" id="Jorhat">
							Jorhat						</option>';
											<option value="Junagadh" id="Junagadh">
							Junagadh						</option>';
											<option value="Kadayanallur" id="Kadayanallur">
							Kadayanallur						</option>';
											<option value="Kadi" id="Kadi">
							Kadi						</option>';
											<option value="Kadiri" id="Kadiri">
							Kadiri						</option>';
											<option value="Kagaznagar" id="Kagaznagar">
							Kagaznagar						</option>';
											<option value="Kairana" id="Kairana">
							Kairana						</option>';
											<option value="Kaithal" id="Kaithal">
							Kaithal						</option>';
											<option value="Kakinada" id="Kakinada">
							Kakinada						</option>';
											<option value="Kaliaganj" id="Kaliaganj">
							Kaliaganj						</option>';
											<option value="Kalimpong" id="Kalimpong">
							Kalimpong						</option>';
											<option value="Kallur" id="Kallur">
							Kallur						</option>';
											<option value="Kalna" id="Kalna">
							Kalna						</option>';
											<option value="Kalol" id="Kalol">
							Kalol						</option>';
											<option value="Kalyan" id="Kalyan">
							Kalyan						</option>';
											<option value="Kalyani" id="Kalyani">
							Kalyani						</option>';
											<option value="Kamarhati" id="Kamarhati">
							Kamarhati						</option>';
											<option value="Kambam" id="Kambam">
							Kambam						</option>';
											<option value="Kamthi" id="Kamthi">
							Kamthi						</option>';
											<option value="Kanchipuram" id="Kanchipuram">
							Kanchipuram						</option>';
											<option value="Kanchrapara" id="Kanchrapara">
							Kanchrapara						</option>';
											<option value="Kandi" id="Kandi">
							Kandi						</option>';
											<option value="Kandla" id="Kandla">
							Kandla						</option>';
											<option value="Kangra" id="Kangra">
							Kangra						</option>';
											<option value="Kanhangad" id="Kanhangad">
							Kanhangad						</option>';
											<option value="Kannauj" id="Kannauj">
							Kannauj						</option>';
											<option value="Kannur" id="Kannur">
							Kannur						</option>';
											<option value="Kanpur" id="Kanpur">
							Kanpur						</option>';
											<option value="Kanyakumari" id="Kanyakumari">
							Kanyakumari						</option>';
											<option value="Kapra" id="Kapra">
							Kapra						</option>';
											<option value="Kapurthala" id="Kapurthala">
							Kapurthala						</option>';
											<option value="Karad" id="Karad">
							Karad						</option>';
											<option value="Karaikal" id="Karaikal">
							Karaikal						</option>';
											<option value="Karaikudi" id="Karaikudi">
							Karaikudi						</option>';
											<option value="Karanja" id="Karanja">
							Karanja						</option>';
											<option value="Karauli" id="Karauli">
							Karauli						</option>';
											<option value="Karimganj" id="Karimganj">
							Karimganj						</option>';
											<option value="Karimnagar" id="Karimnagar">
							Karimnagar						</option>';
											<option value="Karnal" id="Karnal">
							Karnal						</option>';
											<option value="Karur" id="Karur">
							Karur						</option>';
											<option value="Karwar" id="Karwar">
							Karwar						</option>';
											<option value="Kasaragod" id="Kasaragod">
							Kasaragod						</option>';
											<option value="Kasauli" id="Kasauli">
							Kasauli						</option>';
											<option value="Kasganj" id="Kasganj">
							Kasganj						</option>';
											<option value="Kashipur" id="Kashipur">
							Kashipur						</option>';
											<option value="Kathua" id="Kathua">
							Kathua						</option>';
											<option value="Katihar" id="Katihar">
							Katihar						</option>';
											<option value="Katni" id="Katni">
							Katni						</option>';
											<option value="Katras" id="Katras">
							Katras						</option>';
											<option value="Katwa" id="Katwa">
							Katwa						</option>';
											<option value="Kavali" id="Kavali">
							Kavali						</option>';
											<option value="Kavaratti" id="Kavaratti">
							Kavaratti						</option>';
											<option value="Kayamkulam" id="Kayamkulam">
							Kayamkulam						</option>';
											<option value="Kendujhar" id="Kendujhar">
							Kendujhar						</option>';
											<option value="Keshod" id="Keshod">
							Keshod						</option>';
											<option value="Khambhat" id="Khambhat">
							Khambhat						</option>';
											<option value="Khamgaon" id="Khamgaon">
							Khamgaon						</option>';
											<option value="Khamman" id="Khamman">
							Khamman						</option>';
											<option value="Khandwa" id="Khandwa">
							Khandwa						</option>';
											<option value="Khanna" id="Khanna">
							Khanna						</option>';
											<option value="Kharagpur" id="Kharagpur">
							Kharagpur						</option>';
											<option value="Kharar" id="Kharar">
							Kharar						</option>';
											<option value="Khardaha" id="Khardaha">
							Khardaha						</option>';
											<option value="Khargone" id="Khargone">
							Khargone						</option>';
											<option value="Khatauli" id="Khatauli">
							Khatauli						</option>';
											<option value="Khirpai" id="Khirpai">
							Khirpai						</option>';
											<option value="Khopoli" id="Khopoli">
							Khopoli						</option>';
											<option value="Khurja" id="Khurja">
							Khurja						</option>';
											<option value="Kiratpur" id="Kiratpur">
							Kiratpur						</option>';
											<option value="Kishanganj" id="Kishanganj">
							Kishanganj						</option>';
											<option value="Kishangarh" id="Kishangarh">
							Kishangarh						</option>';
											<option value="Kochi" id="Kochi">
							Kochi						</option>';
											<option value="Kohima" id="Kohima">
							Kohima						</option>';
											<option value="Kolar" id="Kolar">
							Kolar						</option>';
											<option value="Kolhapur" id="Kolhapur">
							Kolhapur						</option>';
											<option value="Kolkata" id="Kolkata">
							Kolkata						</option>';
											<option value="Kollam" id="Kollam">
							Kollam						</option>';
											<option value="Kollegal" id="Kollegal">
							Kollegal						</option>';
											<option value="Komarapalayam" id="Komarapalayam">
							Komarapalayam						</option>';
											<option value="Konch" id="Konch">
							Konch						</option>';
											<option value="Konnagar" id="Konnagar">
							Konnagar						</option>';
											<option value="Kopargaon" id="Kopargaon">
							Kopargaon						</option>';
											<option value="Koppal" id="Koppal">
							Koppal						</option>';
											<option value="Koratla" id="Koratla">
							Koratla						</option>';
											<option value="Korba" id="Korba">
							Korba						</option>';
											<option value="Kota" id="Kota">
							Kota						</option>';
											<option value="Kotkapura" id="Kotkapura">
							Kotkapura						</option>';
											<option value="Kottagudem" id="Kottagudem">
							Kottagudem						</option>';
											<option value="Kottayam" id="Kottayam">
							Kottayam						</option>';
											<option value="Kovilpatti" id="Kovilpatti">
							Kovilpatti						</option>';
											<option value="Kozhikode" id="Kozhikode">
							Kozhikode						</option>';
											<option value="Krishnagiri" id="Krishnagiri">
							Krishnagiri						</option>';
											<option value="Krishnanagar" id="Krishnanagar">
							Krishnanagar						</option>';
											<option value="Kuchaman" id="Kuchaman">
							Kuchaman						</option>';
											<option value="Kulti" id="Kulti">
							Kulti						</option>';
											<option value="Kullu" id="Kullu">
							Kullu						</option>';
											<option value="Kumbakonam" id="Kumbakonam">
							Kumbakonam						</option>';
											<option value="Kurnool" id="Kurnool">
							Kurnool						</option>';
											<option value="Kurseong" id="Kurseong">
							Kurseong						</option>';
											<option value="Kurukshetra" id="Kurukshetra">
							Kurukshetra						</option>';
											<option value="Ladnun" id="Ladnun">
							Ladnun						</option>';
											<option value="Laharpur" id="Laharpur">
							Laharpur						</option>';
											<option value="Lakhimpur" id="Lakhimpur">
							Lakhimpur						</option>';
											<option value="Lakhisarai" id="Lakhisarai">
							Lakhisarai						</option>';
											<option value="Lalitpur" id="Lalitpur">
							Lalitpur						</option>';
											<option value="Latur" id="Latur">
							Latur						</option>';
											<option value="Leh" id="Leh">
							Leh						</option>';
											<option value="Lonavla" id="Lonavla">
							Lonavla						</option>';
											<option value="Loni" id="Loni">
							Loni						</option>';
											<option value="Lucknow" id="Lucknow">
							Lucknow						</option>';
											<option value="Ludhiana" id="Ludhiana">
							Ludhiana						</option>';
											<option value="Lumding" id="Lumding">
							Lumding						</option>';
											<option value="Machilipatnam" id="Machilipatnam">
							Machilipatnam						</option>';
											<option value="Madanapalle" id="Madanapalle">
							Madanapalle						</option>';
											<option value="Madgaon" id="Madgaon">
							Madgaon						</option>';
											<option value="Madhubani" id="Madhubani">
							Madhubani						</option>';
											<option value="Madhyamgram" id="Madhyamgram">
							Madhyamgram						</option>';
											<option value="Madurai" id="Madurai">
							Madurai						</option>';
											<option value="Mahbubnagar" id="Mahbubnagar">
							Mahbubnagar						</option>';
											<option value="Maheshtala" id="Maheshtala">
							Maheshtala						</option>';
											<option value="Mahoba" id="Mahoba">
							Mahoba						</option>';
											<option value="Mahuva" id="Mahuva">
							Mahuva						</option>';
											<option value="Mainpuri" id="Mainpuri">
							Mainpuri						</option>';
											<option value="Makrana" id="Makrana">
							Makrana						</option>';
											<option value="Malappuram" id="Malappuram">
							Malappuram						</option>';
											<option value="Malbazar" id="Malbazar">
							Malbazar						</option>';
											<option value="Malegaon" id="Malegaon">
							Malegaon						</option>';
											<option value="Malerkotla" id="Malerkotla">
							Malerkotla						</option>';
											<option value="Malkapur" id="Malkapur">
							Malkapur						</option>';
											<option value="Malout" id="Malout">
							Malout						</option>';
											<option value="Manali" id="Manali">
							Manali						</option>';
											<option value="Mancherial" id="Mancherial">
							Mancherial						</option>';
											<option value="Mandamarri" id="Mandamarri">
							Mandamarri						</option>';
											<option value="MandiDabwali" id="MandiDabwali">
							MandiDabwali						</option>';
											<option value="MandiGobindgarh" id="MandiGobindgarh">
							MandiGobindgarh						</option>';
											<option value="Mandla" id="Mandla">
							Mandla						</option>';
											<option value="Mandsaur" id="Mandsaur">
							Mandsaur						</option>';
											<option value="Mandvi" id="Mandvi">
							Mandvi						</option>';
											<option value="Mandya" id="Mandya">
							Mandya						</option>';
											<option value="Mangalagiri" id="Mangalagiri">
							Mangalagiri						</option>';
											<option value="Mangalore" id="Mangalore">
							Mangalore						</option>';
											<option value="Mangrol" id="Mangrol">
							Mangrol						</option>';
											<option value="Manjeri" id="Manjeri">
							Manjeri						</option>';
											<option value="Manmad" id="Manmad">
							Manmad						</option>';
											<option value="Mannargudi" id="Mannargudi">
							Mannargudi						</option>';
											<option value="Mansa" id="Mansa">
							Mansa						</option>';
											<option value="Markapur" id="Markapur">
							Markapur						</option>';
											<option value="Mathabhanga" id="Mathabhanga">
							Mathabhanga						</option>';
											<option value="Mathura" id="Mathura">
							Mathura						</option>';
											<option value="Mau" id="Mau">
							Mau						</option>';
											<option value="Mauranipur" id="Mauranipur">
							Mauranipur						</option>';
											<option value="Mawana" id="Mawana">
							Mawana						</option>';
											<option value="Mayiladuthurai" id="Mayiladuthurai">
							Mayiladuthurai						</option>';
											<option value="Meerut" id="Meerut">
							Meerut						</option>';
											<option value="Mehsana" id="Mehsana">
							Mehsana						</option>';
											<option value="Mekliganj" id="Mekliganj">
							Mekliganj						</option>';
											<option value="Memari" id="Memari">
							Memari						</option>';
											<option value="Mettupalayam" id="Mettupalayam">
							Mettupalayam						</option>';
											<option value="Mettur" id="Mettur">
							Mettur						</option>';
											<option value="Mhow" id="Mhow">
							Mhow						</option>';
											<option value="Midnapore" id="Midnapore">
							Midnapore						</option>';
											<option value="Miraj" id="Miraj">
							Miraj						</option>';
											<option value="Mirik" id="Mirik">
							Mirik						</option>';
											<option value="Miryalguda" id="Miryalguda">
							Miryalguda						</option>';
											<option value="Mirzapur" id="Mirzapur">
							Mirzapur						</option>';
											<option value="Modasa" id="Modasa">
							Modasa						</option>';
											<option value="Modinagar" id="Modinagar">
							Modinagar						</option>';
											<option value="Moga" id="Moga">
							Moga						</option>';
											<option value="Mohali" id="Mohali">
							Mohali						</option>';
											<option value="Mokama" id="Mokama">
							Mokama						</option>';
											<option value="Moradabad" id="Moradabad">
							Moradabad						</option>';
											<option value="Morbi" id="Morbi">
							Morbi						</option>';
											<option value="Morena" id="Morena">
							Morena						</option>';
											<option value="Mormugoa" id="Mormugoa">
							Mormugoa						</option>';
											<option value="Motihari" id="Motihari">
							Motihari						</option>';
											<option value="Mubarakpur" id="Mubarakpur">
							Mubarakpur						</option>';
											<option value="Mughalsarai" id="Mughalsarai">
							Mughalsarai						</option>';
											<option value="Mumbai" id="Mumbai">
							Mumbai						</option>';
											<option value="Munger" id="Munger">
							Munger						</option>';
											<option value="Muradnagar" id="Muradnagar">
							Muradnagar						</option>';
											<option value="Murshidabad" id="Murshidabad">
							Murshidabad						</option>';
											<option value="Mussoorie" id="Mussoorie">
							Mussoorie						</option>';
											<option value="Muzaffarnagar" id="Muzaffarnagar">
							Muzaffarnagar						</option>';
											<option value="Muzaffarpur" id="Muzaffarpur">
							Muzaffarpur						</option>';
											<option value="Mysore" id="Mysore">
							Mysore						</option>';
											<option value="Nabadwip" id="Nabadwip">
							Nabadwip						</option>';
											<option value="Nabha" id="Nabha">
							Nabha						</option>';
											<option value="Nadiad" id="Nadiad">
							Nadiad						</option>';
											<option value="Nagaon" id="Nagaon">
							Nagaon						</option>';
											<option value="Nagapattinam" id="Nagapattinam">
							Nagapattinam						</option>';
											<option value="Nagaur" id="Nagaur">
							Nagaur						</option>';
											<option value="Nagda" id="Nagda">
							Nagda						</option>';
											<option value="Nagercoil" id="Nagercoil">
							Nagercoil						</option>';
											<option value="Nagina" id="Nagina">
							Nagina						</option>';
											<option value="Nagpur" id="Nagpur">
							Nagpur						</option>';
											<option value="Naihati" id="Naihati">
							Naihati						</option>';
											<option value="Nainital" id="Nainital">
							Nainital						</option>';
											<option value="Najibabad" id="Najibabad">
							Najibabad						</option>';
											<option value="Nalgonda" id="Nalgonda">
							Nalgonda						</option>';
											<option value="Nalhati" id="Nalhati">
							Nalhati						</option>';
											<option value="Namakkal" id="Namakkal">
							Namakkal						</option>';
											<option value="Nanded" id="Nanded">
							Nanded						</option>';
											<option value="Nandurbar" id="Nandurbar">
							Nandurbar						</option>';
											<option value="Nandyal" id="Nandyal">
							Nandyal						</option>';
											<option value="Narasaraopet" id="Narasaraopet">
							Narasaraopet						</option>';
											<option value="Narnaul" id="Narnaul">
							Narnaul						</option>';
											<option value="Narsapur" id="Narsapur">
							Narsapur						</option>';
											<option value="Narsinghpur" id="Narsinghpur">
							Narsinghpur						</option>';
											<option value="Narwana" id="Narwana">
							Narwana						</option>';
											<option value="Nashik" id="Nashik">
							Nashik						</option>';
											<option value="NavgharManikpur" id="NavgharManikpur">
							NavgharManikpur						</option>';
											<option value="NaviMumbai" id="NaviMumbai">
							NaviMumbai						</option>';
											<option value="Navsari" id="Navsari">
							Navsari						</option>';
											<option value="Nawabganj" id="Nawabganj">
							Nawabganj						</option>';
											<option value="Nawada" id="Nawada">
							Nawada						</option>';
											<option value="Nawalgarh" id="Nawalgarh">
							Nawalgarh						</option>';
											<option value="Nedumangad" id="Nedumangad">
							Nedumangad						</option>';
											<option value="Nellore" id="Nellore">
							Nellore						</option>';
											<option value="NewBarrackpur" id="NewBarrackpur">
							NewBarrackpur						</option>';
											<option value="Neyveli" id="Neyveli">
							Neyveli						</option>';
											<option value="Neyyattinkara" id="Neyyattinkara">
							Neyyattinkara						</option>';
											<option value="Nimach" id="Nimach">
							Nimach						</option>';
											<option value="Nimbahera" id="Nimbahera">
							Nimbahera						</option>';
											<option value="Nipani" id="Nipani">
							Nipani						</option>';
											<option value="Nirmal" id="Nirmal">
							Nirmal						</option>';
											<option value="Nizamabad" id="Nizamabad">
							Nizamabad						</option>';
											<option value="Noida" id="Noida">
							Noida						</option>';
											<option value="NorthLakhimpur" id="NorthLakhimpur">
							NorthLakhimpur						</option>';
											<option value="Nuzvid" id="Nuzvid">
							Nuzvid						</option>';
											<option value="Obra" id="Obra">
							Obra						</option>';
											<option value="Ongole" id="Ongole">
							Ongole						</option>';
											<option value="Ooty" id="Ooty">
							Ooty						</option>';
											<option value="Orai" id="Orai">
							Orai						</option>';
											<option value="Osmanabad" id="Osmanabad">
							Osmanabad						</option>';
											<option value="Ozhukarai" id="Ozhukarai">
							Ozhukarai						</option>';
											<option value="Palakkad" id="Palakkad">
							Palakkad						</option>';
											<option value="Palakol" id="Palakol">
							Palakol						</option>';
											<option value="Palani" id="Palani">
							Palani						</option>';
											<option value="Palanpur" id="Palanpur">
							Palanpur						</option>';
											<option value="Palghar" id="Palghar">
							Palghar						</option>';
											<option value="Pali" id="Pali">
							Pali						</option>';
											<option value="Palitana" id="Palitana">
							Palitana						</option>';
											<option value="Pallavaram" id="Pallavaram">
							Pallavaram						</option>';
											<option value="Palwal" id="Palwal">
							Palwal						</option>';
											<option value="Palwancha" id="Palwancha">
							Palwancha						</option>';
											<option value="Panaji" id="Panaji">
							Panaji						</option>';
											<option value="Panchkula" id="Panchkula">
							Panchkula						</option>';
											<option value="Pandharpur" id="Pandharpur">
							Pandharpur						</option>';
											<option value="Panihati" id="Panihati">
							Panihati						</option>';
											<option value="Panipat" id="Panipat">
							Panipat						</option>';
											<option value="Panna" id="Panna">
							Panna						</option>';
											<option value="Panruti" id="Panruti">
							Panruti						</option>';
											<option value="Panskura" id="Panskura">
							Panskura						</option>';
											<option value="Panvel" id="Panvel">
							Panvel						</option>';
											<option value="Paradip" id="Paradip">
							Paradip						</option>';
											<option value="Paramakudi" id="Paramakudi">
							Paramakudi						</option>';
											<option value="Parasia" id="Parasia">
							Parasia						</option>';
											<option value="Parbhani" id="Parbhani">
							Parbhani						</option>';
											<option value="Parli" id="Parli">
							Parli						</option>';
											<option value="Patan" id="Patan">
							Patan						</option>';
											<option value="Pathankot" id="Pathankot">
							Pathankot						</option>';
											<option value="Patiala" id="Patiala">
							Patiala						</option>';
											<option value="Patna" id="Patna">
							Patna						</option>';
											<option value="Pattukkottai" id="Pattukkottai">
							Pattukkottai						</option>';
											<option value="Payyannur" id="Payyannur">
							Payyannur						</option>';
											<option value="Petlad" id="Petlad">
							Petlad						</option>';
											<option value="Phagwara" id="Phagwara">
							Phagwara						</option>';
											<option value="Phaltan" id="Phaltan">
							Phaltan						</option>';
											<option value="PhulwariSharif" id="PhulwariSharif">
							PhulwariSharif						</option>';
											<option value="Phusro" id="Phusro">
							Phusro						</option>';
											<option value="Pilibhit" id="Pilibhit">
							Pilibhit						</option>';
											<option value="Pilkhuwa" id="Pilkhuwa">
							Pilkhuwa						</option>';
											<option value="PimpriChinchwad" id="PimpriChinchwad">
							PimpriChinchwad						</option>';
											<option value="Pitapuram" id="Pitapuram">
							Pitapuram						</option>';
											<option value="Pithampur" id="Pithampur">
							Pithampur						</option>';
											<option value="Pollachi" id="Pollachi">
							Pollachi						</option>';
											<option value="Pondicherry" id="Pondicherry">
							Pondicherry						</option>';
											<option value="Ponnani" id="Ponnani">
							Ponnani						</option>';
											<option value="Ponnur" id="Ponnur">
							Ponnur						</option>';
											<option value="Porbandar" id="Porbandar">
							Porbandar						</option>';
											<option value="PortBlair" id="PortBlair">
							PortBlair						</option>';
											<option value="Proddatur" id="Proddatur">
							Proddatur						</option>';
											<option value="Pudukkottai" id="Pudukkottai">
							Pudukkottai						</option>';
											<option value="Pujali" id="Pujali">
							Pujali						</option>';
											<option value="Puliyankudi" id="Puliyankudi">
							Puliyankudi						</option>';
											<option value="Pune" id="Pune">
							Pune						</option>';
											<option value="Puri" id="Puri">
							Puri						</option>';
											<option value="Purnia" id="Purnia">
							Purnia						</option>';
											<option value="Purulia" id="Purulia">
							Purulia						</option>';
											<option value="Pusad" id="Pusad">
							Pusad						</option>';
											<option value="Pushkar" id="Pushkar">
							Pushkar						</option>';
											<option value="Qutubullapur" id="Qutubullapur">
							Qutubullapur						</option>';
											<option value="RabkaviBanhatti" id="RabkaviBanhatti">
							RabkaviBanhatti						</option>';
											<option value="Raebareli" id="Raebareli">
							Raebareli						</option>';
											<option value="Raghunathpur" id="Raghunathpur">
							Raghunathpur						</option>';
											<option value="Raichur" id="Raichur">
							Raichur						</option>';
											<option value="Raiganj" id="Raiganj">
							Raiganj						</option>';
											<option value="Raigad" id="Raigad">
							Raigad						</option>';
											<option value="Raigarh" id="Raigarh">
							Raigarh						</option>';
											<option value="Raipur" id="Raipur">
							Raipur						</option>';
											<option value="Rajahmundry" id="Rajahmundry">
							Rajahmundry						</option>';
											<option value="Rajapalayam" id="Rajapalayam">
							Rajapalayam						</option>';
											<option value="Rajendranagar" id="Rajendranagar">
							Rajendranagar						</option>';
											<option value="Rajgarh" id="Rajgarh">
							Rajgarh						</option>';
											<option value="Rajkot" id="Rajkot">
							Rajkot						</option>';
											<option value="RajNandgaon" id="RajNandgaon">
							RajNandgaon						</option>';
											<option value="Rajpura" id="Rajpura">
							Rajpura						</option>';
											<option value="RajpurSonarpur" id="RajpurSonarpur">
							RajpurSonarpur						</option>';
											<option value="Rajsamand" id="Rajsamand">
							Rajsamand						</option>';
											<option value="Ramachandrapuram" id="Ramachandrapuram">
							Ramachandrapuram						</option>';
											<option value="Ramagundam" id="Ramagundam">
							Ramagundam						</option>';
											<option value="Ramanagaram" id="Ramanagaram">
							Ramanagaram						</option>';
											<option value="Ramanathapuram" id="Ramanathapuram">
							Ramanathapuram						</option>';
											<option value="Ramgarh" id="Ramgarh">
							Ramgarh						</option>';
											<option value="Rampur" id="Rampur">
							Rampur						</option>';
											<option value="Rampurhat" id="Rampurhat">
							Rampurhat						</option>';
											<option value="Ranaghat" id="Ranaghat">
							Ranaghat						</option>';
											<option value="Ranchi" id="Ranchi">
							Ranchi						</option>';
											<option value="Ranebennur" id="Ranebennur">
							Ranebennur						</option>';
											<option value="Raniganj" id="Raniganj">
							Raniganj						</option>';
											<option value="Ranip" id="Ranip">
							Ranip						</option>';
											<option value="Ratangarh" id="Ratangarh">
							Ratangarh						</option>';
											<option value="Rath" id="Rath">
							Rath						</option>';
											<option value="Ratlam" id="Ratlam">
							Ratlam						</option>';
											<option value="Ratnagiri" id="Ratnagiri">
							Ratnagiri						</option>';
											<option value="Rayachoti" id="Rayachoti">
							Rayachoti						</option>';
											<option value="Rayadurg" id="Rayadurg">
							Rayadurg						</option>';
											<option value="Rayagada" id="Rayagada">
							Rayagada						</option>';
											<option value="Renukoot" id="Renukoot">
							Renukoot						</option>';
											<option value="Rewa" id="Rewa">
							Rewa						</option>';
											<option value="Rewari" id="Rewari">
							Rewari						</option>';
											<option value="Rishikesh" id="Rishikesh">
							Rishikesh						</option>';
											<option value="Rishra" id="Rishra">
							Rishra						</option>';
											<option value="Robertsonpet" id="Robertsonpet">
							Robertsonpet						</option>';
											<option value="Rohtak" id="Rohtak">
							Rohtak						</option>';
											<option value="Roorkee" id="Roorkee">
							Roorkee						</option>';
											<option value="Rourkela" id="Rourkela">
							Rourkela						</option>';
											<option value="Rudrapur" id="Rudrapur">
							Rudrapur						</option>';
											<option value="Sagar" id="Sagar">
							Sagar						</option>';
											<option value="Sagara" id="Sagara">
							Sagara						</option>';
											<option value="Saharanpur" id="Saharanpur">
							Saharanpur						</option>';
											<option value="Saharsa" id="Saharsa">
							Saharsa						</option>';
											<option value="Sahaswan" id="Sahaswan">
							Sahaswan						</option>';
											<option value="Sahebganj" id="Sahebganj">
							Sahebganj						</option>';
											<option value="Sainthia" id="Sainthia">
							Sainthia						</option>';
											<option value="Salem" id="Salem">
							Salem						</option>';
											<option value="Samalkota" id="Samalkota">
							Samalkota						</option>';
											<option value="Samastipur" id="Samastipur">
							Samastipur						</option>';
											<option value="Sambalpur" id="Sambalpur">
							Sambalpur						</option>';
											<option value="Sambhal" id="Sambhal">
							Sambhal						</option>';
											<option value="Sangamner" id="Sangamner">
							Sangamner						</option>';
											<option value="Sangareddy" id="Sangareddy">
							Sangareddy						</option>';
											<option value="Sangli" id="Sangli">
							Sangli						</option>';
											<option value="Sangrur" id="Sangrur">
							Sangrur						</option>';
											<option value="Sankarankoil" id="Sankarankoil">
							Sankarankoil						</option>';
											<option value="Sardarshahar" id="Sardarshahar">
							Sardarshahar						</option>';
											<option value="Sarni" id="Sarni">
							Sarni						</option>';
											<option value="Sasaram" id="Sasaram">
							Sasaram						</option>';
											<option value="Satara" id="Satara">
							Satara						</option>';
											<option value="Satna" id="Satna">
							Satna						</option>';
											<option value="Sattenapalle" id="Sattenapalle">
							Sattenapalle						</option>';
											<option value="Saunda" id="Saunda">
							Saunda						</option>';
											<option value="Savarkundla" id="Savarkundla">
							Savarkundla						</option>';
											<option value="SawaiMadhopur" id="SawaiMadhopur">
							SawaiMadhopur						</option>';
											<option value="Secunderabad" id="Secunderabad">
							Secunderabad						</option>';
											<option value="Sehore" id="Sehore">
							Sehore						</option>';
											<option value="Seoni" id="Seoni">
							Seoni						</option>';
											<option value="Serampore" id="Serampore">
							Serampore						</option>';
											<option value="Serilingampally" id="Serilingampally">
							Serilingampally						</option>';
											<option value="Shahabad" id="Shahabad">
							Shahabad						</option>';
											<option value="Shahdol" id="Shahdol">
							Shahdol						</option>';
											<option value="Shahjahanpur" id="Shahjahanpur">
							Shahjahanpur						</option>';
											<option value="Shajapur" id="Shajapur">
							Shajapur						</option>';
											<option value="Shamli" id="Shamli">
							Shamli						</option>';
											<option value="Shantipur" id="Shantipur">
							Shantipur						</option>';
											<option value="Shegaon" id="Shegaon">
							Shegaon						</option>';
											<option value="Sheopur" id="Sheopur">
							Sheopur						</option>';
											<option value="Sherkot" id="Sherkot">
							Sherkot						</option>';
											<option value="Shikohabad" id="Shikohabad">
							Shikohabad						</option>';
											<option value="Shillong" id="Shillong">
							Shillong						</option>';
											<option value="Shimla" id="Shimla">
							Shimla						</option>';
											<option value="Shimoga" id="Shimoga">
							Shimoga						</option>';
											<option value="Shirpur" id="Shirpur">
							Shirpur						</option>';
											<option value="Shivpuri" id="Shivpuri">
							Shivpuri						</option>';
											<option value="Shrirampur" id="Shrirampur">
							Shrirampur						</option>';
											<option value="Siddipet" id="Siddipet">
							Siddipet						</option>';
											<option value="Sidhpur" id="Sidhpur">
							Sidhpur						</option>';
											<option value="Sikandrabad" id="Sikandrabad">
							Sikandrabad						</option>';
											<option value="Sikar" id="Sikar">
							Sikar						</option>';
											<option value="Silchar" id="Silchar">
							Silchar						</option>';
											<option value="Siliguri" id="Siliguri">
							Siliguri						</option>';
											<option value="Silvassa" id="Silvassa">
							Silvassa						</option>';
											<option value="Sindhnur" id="Sindhnur">
							Sindhnur						</option>';
											<option value="Sindri" id="Sindri">
							Sindri						</option>';
											<option value="Singrauli" id="Singrauli">
							Singrauli						</option>';
											<option value="Sira" id="Sira">
							Sira						</option>';
											<option value="Sirhind" id="Sirhind">
							Sirhind						</option>';
											<option value="Sirsa" id="Sirsa">
							Sirsa						</option>';
											<option value="Sirsi" id="Sirsi">
							Sirsi						</option>';
											<option value="Sirsilla" id="Sirsilla">
							Sirsilla						</option>';
											<option value="Sitamarhi" id="Sitamarhi">
							Sitamarhi						</option>';
											<option value="Sitapur" id="Sitapur">
							Sitapur						</option>';
											<option value="Sivakasi" id="Sivakasi">
							Sivakasi						</option>';
											<option value="Sivasagar" id="Sivasagar">
							Sivasagar						</option>';
											<option value="Solan" id="Solan">
							Solan						</option>';
											<option value="Solapur" id="Solapur">
							Solapur						</option>';
											<option value="Sonamukhi" id="Sonamukhi">
							Sonamukhi						</option>';
											<option value="Sonipat" id="Sonipat">
							Sonipat						</option>';
											<option value="Sopore" id="Sopore">
							Sopore						</option>';
											<option value="Srikakulam" id="Srikakulam">
							Srikakulam						</option>';
											<option value="Srikalahasti" id="Srikalahasti">
							Srikalahasti						</option>';
											<option value="SriMuktsarSahib" id="SriMuktsarSahib">
							SriMuktsarSahib						</option>';
											<option value="Srinagar" id="Srinagar">
							Srinagar						</option>';
											<option value="Srivilliputhur" id="Srivilliputhur">
							Srivilliputhur						</option>';
											<option value="Sujangarh" id="Sujangarh">
							Sujangarh						</option>';
											<option value="Sultanpur" id="Sultanpur">
							Sultanpur						</option>';
											<option value="Sunabeda" id="Sunabeda">
							Sunabeda						</option>';
											<option value="Sunam" id="Sunam">
							Sunam						</option>';
											<option value="Supaul" id="Supaul">
							Supaul						</option>';
											<option value="Surat" id="Surat">
							Surat						</option>';
											<option value="Suratgarh" id="Suratgarh">
							Suratgarh						</option>';
											<option value="Surendranagar" id="Surendranagar">
							Surendranagar						</option>';
											<option value="Suri" id="Suri">
							Suri						</option>';
											<option value="Suryapet" id="Suryapet">
							Suryapet						</option>';
											<option value="Tadepalligudem" id="Tadepalligudem">
							Tadepalligudem						</option>';
											<option value="Tadpatri" id="Tadpatri">
							Tadpatri						</option>';
											<option value="Taherpur" id="Taherpur">
							Taherpur						</option>';
											<option value="Taki" id="Taki">
							Taki						</option>';
											<option value="Taliparamba" id="Taliparamba">
							Taliparamba						</option>';
											<option value="Tamluk" id="Tamluk">
							Tamluk						</option>';
											<option value="Tanda" id="Tanda">
							Tanda						</option>';
											<option value="Tandur" id="Tandur">
							Tandur						</option>';
											<option value="Tanuku" id="Tanuku">
							Tanuku						</option>';
											<option value="Tarakeswar" id="Tarakeswar">
							Tarakeswar						</option>';
											<option value="TarnTaranSahib" id="TarnTaranSahib">
							TarnTaranSahib						</option>';
											<option value="Tenali" id="Tenali">
							Tenali						</option>';
											<option value="Tenkasi" id="Tenkasi">
							Tenkasi						</option>';
											<option value="Tezpur" id="Tezpur">
							Tezpur						</option>';
											<option value="Thalassery" id="Thalassery">
							Thalassery						</option>';
											<option value="Thane" id="Thane">
							Thane						</option>';
											<option value="Thanesar" id="Thanesar">
							Thanesar						</option>';
											<option value="Thanjavur" id="Thanjavur">
							Thanjavur						</option>';
											<option value="TheniAllinagaram" id="TheniAllinagaram">
							TheniAllinagaram						</option>';
											<option value="Thiruvarur" id="Thiruvarur">
							Thiruvarur						</option>';
											<option value="Thoothukudi" id="Thoothukudi">
							Thoothukudi						</option>';
											<option value="Thrissur" id="Thrissur">
							Thrissur						</option>';
											<option value="Tikamgarh" id="Tikamgarh">
							Tikamgarh						</option>';
											<option value="Tilhar" id="Tilhar">
							Tilhar						</option>';
											<option value="Tindivanam" id="Tindivanam">
							Tindivanam						</option>';
											<option value="Tinsukia" id="Tinsukia">
							Tinsukia						</option>';
											<option value="Tiptur" id="Tiptur">
							Tiptur						</option>';
											<option value="Tiruchendur" id="Tiruchendur">
							Tiruchendur						</option>';
											<option value="Tiruchengode" id="Tiruchengode">
							Tiruchengode						</option>';
											<option value="Tirunelveli" id="Tirunelveli">
							Tirunelveli						</option>';
											<option value="Tirupathur" id="Tirupathur">
							Tirupathur						</option>';
											<option value="Tirupati" id="Tirupati">
							Tirupati						</option>';
											<option value="Tirupur" id="Tirupur">
							Tirupur						</option>';
											<option value="Tirur" id="Tirur">
							Tirur						</option>';
											<option value="Tiruvalla" id="Tiruvalla">
							Tiruvalla						</option>';
											<option value="Tiruvannamalai" id="Tiruvannamalai">
							Tiruvannamalai						</option>';
											<option value="Tisra" id="Tisra">
							Tisra						</option>';
											<option value="Titagarh" id="Titagarh">
							Titagarh						</option>';
											<option value="Tohana" id="Tohana">
							Tohana						</option>';
											<option value="Tonk" id="Tonk">
							Tonk						</option>';
											<option value="Trichy" id="Trichy">
							Trichy						</option>';
											<option value="Trivandrum" id="Trivandrum">
							Trivandrum						</option>';
											<option value="Tufanganj" id="Tufanganj">
							Tufanganj						</option>';
											<option value="Tumkur" id="Tumkur">
							Tumkur						</option>';
											<option value="Tundla" id="Tundla">
							Tundla						</option>';
											<option value="Tuni" id="Tuni">
							Tuni						</option>';
											<option value="Tura" id="Tura">
							Tura						</option>';
											<option value="Udaipur" id="Udaipur">
							Udaipur						</option>';
											<option value="Udgir" id="Udgir">
							Udgir						</option>';
											<option value="Udhampur" id="Udhampur">
							Udhampur						</option>';
											<option value="Udumalaipettai" id="Udumalaipettai">
							Udumalaipettai						</option>';
											<option value="Udupi" id="Udupi">
							Udupi						</option>';
											<option value="Ujhani" id="Ujhani">
							Ujhani						</option>';
											<option value="Ujjain" id="Ujjain">
							Ujjain						</option>';
											<option value="Uluberia" id="Uluberia">
							Uluberia						</option>';
											<option value="Una" id="Una">
							Una						</option>';
											<option value="Unjha" id="Unjha">
							Unjha						</option>';
											<option value="Unnao" id="Unnao">
							Unnao						</option>';
											<option value="Upleta" id="Upleta">
							Upleta						</option>';
											<option value="Uppal" id="Uppal">
							Uppal						</option>';
											<option value="UranIslampur" id="UranIslampur">
							UranIslampur						</option>';
											<option value="Uttarpara" id="Uttarpara">
							Uttarpara						</option>';
											<option value="Vadodara" id="Vadodara">
							Vadodara						</option>';
											<option value="Valparai" id="Valparai">
							Valparai						</option>';
											<option value="Valsad" id="Valsad">
							Valsad						</option>';
											<option value="Vaniyambadi" id="Vaniyambadi">
							Vaniyambadi						</option>';
											<option value="Vapi" id="Vapi">
							Vapi						</option>';
											<option value="Varanasi" id="Varanasi">
							Varanasi						</option>';
											<option value="VasaiVirar" id="VasaiVirar">
							VasaiVirar						</option>';
											<option value="Vejalpur" id="Vejalpur">
							Vejalpur						</option>';
											<option value="Vellore" id="Vellore">
							Vellore						</option>';
											<option value="Veraval" id="Veraval">
							Veraval						</option>';
											<option value="Vidisha" id="Vidisha">
							Vidisha						</option>';
											<option value="Vijalpor" id="Vijalpor">
							Vijalpor						</option>';
											<option value="Vijayawada" id="Vijayawada">
							Vijayawada						</option>';
											<option value="Viluppuram" id="Viluppuram">
							Viluppuram						</option>';
											<option value="Vinukonda" id="Vinukonda">
							Vinukonda						</option>';
											<option value="Viramgam" id="Viramgam">
							Viramgam						</option>';
											<option value="Virudhachalam" id="Virudhachalam">
							Virudhachalam						</option>';
											<option value="Virudhunagar" id="Virudhunagar">
							Virudhunagar						</option>';
											<option value="Visnagar" id="Visnagar">
							Visnagar						</option>';
											<option value="Vizag" id="Vizag">
							Vizag						</option>';
											<option value="Vizianagaram" id="Vizianagaram">
							Vizianagaram						</option>';
											<option value="Vrindavan" id="Vrindavan">
							Vrindavan						</option>';
											<option value="Wanaparthi" id="Wanaparthi">
							Wanaparthi						</option>';
											<option value="Wani" id="Wani">
							Wani						</option>';
											<option value="Warangal" id="Warangal">
							Warangal						</option>';
											<option value="Wardha" id="Wardha">
							Wardha						</option>';
											<option value="Washim" id="Washim">
							Washim						</option>';
											<option value="Yadgir" id="Yadgir">
							Yadgir						</option>';
											<option value="Yamunanagar" id="Yamunanagar">
							Yamunanagar						</option>';
											<option value="Yavatmal" id="Yavatmal">
							Yavatmal						</option>';
											<option value="Yemmiganur" id="Yemmiganur">
							Yemmiganur						</option>';
									</select>
                        </div>
						<div class="field-row">
                            <label>Address</label>
                            <textarea class="le-input" rows="6" name="address"></textarea>
                        </div>
						<div class="field-row">
                            <label>Pincode</label>
                            <input type="text" class="le-input" maxlength="6" name="pincode">
                        </div>
                        <div class="buttons-holder">
                            <button type="submit" class="le-button huge" name="reguser" >Sign Up</button>
                        </div><!-- /.buttons-holder -->
					</form>
					<h2 class="semi-bold">Sign up today and you'll be able to :</h2>

					<ul class="list-unstyled list-benefits">
						<li><i class="fa fa-check primary-color"></i> Post your Adds for free</li>
						<li><i class="fa fa-check primary-color"></i> Sell your products easily</li>
						<li><i class="fa fa-check primary-color"></i> Keep a record of all your Adds</li>
					</ul>

				</section><!-- /.register -->
		
			</div><!-- /.col -->
		</div><!-- /.row -->
	</div><!-- /.container -->
</main><!-- /.authentication -->

					
					
					
<!-- ========================================= MAIN : END ========================================= -->



	<?php
		include_once('include/footer.php');
	?>

	<!-- JavaScripts placed at the end of the document so the pages load faster -->
	<script src="assets/js/jquery-1.10.2.min.js"></script>
	<script src="assets/js/jquery-migrate-1.2.1.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="http://maps.google.com/maps/api/js?sensor=false&amp;language=en"></script>
	<script src="assets/js/gmap3.min.js"></script>
	<script src="assets/js/bootstrap-hover-dropdown.min.js"></script>
	<script src="assets/js/owl.carousel.min.js"></script>
	<script src="assets/js/css_browser_selector.min.js"></script>
	<script src="assets/js/echo.min.js"></script>
	<script src="assets/js/jquery.easing-1.3.min.js"></script>
	<script src="assets/js/bootstrap-slider.min.js"></script>
    <script src="assets/js/jquery.raty.min.js"></script>
    <script src="assets/js/jquery.prettyPhoto.min.js"></script>
    <script src="assets/js/jquery.customSelect.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
	<script src="assets/js/scripts.js"></script>
	<script type="text/javascript" src="assets/js/valid.js"></script>
	
	<!-- For demo purposes – can be removed on production -->
	
	<script src="switchstylesheet/switchstylesheet.js"></script>
	
	<script>
		function checkType(s1,s2)
		{
				document.getElementById("comform").style.display=s1;
				document.getElementById("userform").style.display=s2;
		}
		$(document).ready(function(){ 
			$(".changecolor").switchstylesheet( { seperator:"color"} );
			$('.show-theme-options').click(function(){
				$(this).parent().toggleClass('open');
				return false;
			});
		});

		$(window).bind("load", function() {
		   $('.show-theme-options').delay(2000).trigger('click');
		});
	</script>
	<!-- For demo purposes – can be removed on production : End -->

	<script src="http://w.sharethis.com/button/buttons.js"></script>

</body>
</html>