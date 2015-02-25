<html>
	<head>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
		<title>Evaluate your GATE-2015 response</title>
		
		<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

	<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-54764840-2', 'auto');
  ga('send', 'pageview');

</script>
	</head>
	

<body>
<div class="body container">
<h1>Evaluate GATE-2015 response against Made Easy answer key</h1>
<h4>Send your love and concerns to <a href="mailto:sudhirxps+gate@gmail.com">sudhirxps+gate@gmail.com</a></h4>
<div><a class="btn btn-info" href="/gate2015/">Evaluate another response</a></div>
<hr/>
<div id="summary" class="well text-bold">
</div>
<hr/>
<div class="container" style="zoom:88%">
<?
	if(isset($_GET['response'])){
    $url = $_GET['response'];
    echo file_get_contents($url);
	
	?>
	
	<script>
		//8th Feb Forenoon Session Answer Key
		ga_8_fn = {'1':'2','2':'2','3':'3','4':'2','5':'3','6':'4','7':'2','8':'2006','9':'2','10':'2'};

		cs_8_fn = {'1':'3','2':'3','3':'3','4':'4','5':'3','6':'2','7':'612.06','8':'4','9':'1','10':'3','11':'199','12':'80','13':'2','14':'3','15':'15','16':'1','17':'2','18':'3','19':'1','20':'4','21':'4','22':'2','23':'175','24':'1','25':'4','26':'309.33','27':'2','28':'2','29':'50','30':'2','31':'3','32':'230','33':'140','34':'2','35':'4','36':'158','37':'8','38':'*','39':'4','40':'3','41':'2','42':'3','43':'10','44':'1','45':'995','46':'1575','47':'3','48':'1','49':'5','50':'3','51':'0.75','52':'3','53':'0','54':'4','55':'4'}

		//7th Feb Afternoon Session Answer Key
		cs_7_af = {'1':'3','2':'2048','3':'4','4':'36','5':'6','6':'4','7':'2','8':'14','9':'22','10':'4','11':'4','12':'1','13':'19','14':'51','15':'3','16':'1','17':'3','18':'3','19':'1','20':'*','21':'2','22':'5','23':'2','24':'12','25':'2','26':'1','27':'3','28':'3','29':'1','30':'3','31':'1','32':'6.1','33':'36','34':'2','35':'3','36':'1','37':'3','38':'5','39':'1','40':'2','41':'*','42':'15','43':'13','44':'4','45':'1','46':'3','47':'0','48':'36','49':'0.95','50':'3','51':'4','52':'2','53':'3','54':'1','55':'12'};

		ga_7_af  = {'1':'3','2':'3','3':'4','4':'3','5':'3','6':'1','7':'2','8':'8','9':'2','10':'1'};

		
		//7th Feb Forenoon Session Answer Key
		
		ga_7_fn = {'1':'1','2':'3','3':'4','4':'1','5':'1','6':'3','7':'1','8':'32','9':'4','10':'3'};
		
		cs_7_fn = {'1':'1','2':'3','3':'3','4':'2','5':'1','6':'4','7':'1','8':'3','9':'3','10':'3','11':'4','12':'1','13':'2','14':'3','15':'3','16':'2','17':'1','18':'4','19':'4','20':'3','21':'4','22':'1','23':'5','24':'-5','25':'2','26':'320','27':'2','28':'5','29':'0.462','30':'1','31':'0.99','32':'4','33':'2','34':'24','35':'1','36':'3','37':'2','38':'4','39':'1','40':'2','41':'4','42':'12','43':'1','44':'14020','45':'3.2','46':'10','47':'1','48':'-1','49':'4','50':'1','51':'2','52':'3','53':'69','54':'4','55':'2'};
		
		correct = 0;
		incorrect = 0;
		not_attempted = 0;
		doubtful = 0;
		
		marks_correct = {'1':0,'2':0}
		marks_incorrect = {'1':0,'2':0}
		
		for( i=1;i<=65;i++){

			ans = parseFloat(document.images[i].parentNode.innerText.split(":")[1])
			
			question_details = document.images[i].name.split('.')[0].split('_');
			
			if(i===1){
				session = parseInt(question_details[question_details.length - 2]);
				
				if(session === 7){
					general_aptitude = ga_8_fn;
					computer_science = cs_8_fn;
				} else if(session === 6 ){
					general_aptitude = ga_7_af;
					computer_science = cs_7_af;
				} else if(session == 5){
					general_aptitude = ga_7_fn;
					computer_science = cs_7_fn;
				}
			}
			
			section = question_details[question_details.length - 3];

			question_number = question_details[question_details.length - 1];
			
			if(session === 6){
				
				if(question_number == 41 || question_number == 20){
					doubtful++;
					document.images[i].parentNode.parentNode.parentNode.parentNode.style.border = "thick dotted yellow";
					continue;
				}
			}else if(session == 7){
				if(question_number == 38){
					doubtful++;
					document.images[i].parentNode.parentNode.parentNode.parentNode.style.border = "thick dotted yellow";
					continue;
				}
			}
			
			
			if(section === "ga" && !isNaN(ans)){
			
				correct_answer = parseFloat(general_aptitude[parseInt(question_number)])
				
				if(correct_answer == ans){
					correct++;
					
					if( i <= 5){
						marks_correct[1]++
					} else if (i > 5 && i <=10){
						marks_correct[2]++
					}
					
					document.images[i].parentNode.parentNode.parentNode.parentNode.style.border = "thick solid green";
					console.log("Q "+i+" correct");
				}else{
					incorrect++
					
					if( i <= 5){
						marks_incorrect[1]++
					} else if (i > 5 && i <=10){
						marks_incorrect[2]++
					}
					
					document.images[i].parentNode.parentNode.parentNode.parentNode.style.border = "thick solid red";
					console.log("Q "+i+" incorrect");
				}
				document.images[i].parentNode.innerHTML = document.images[i].parentNode.innerHTML  + "<hr/><strong>Made Easy Answer :  </strong>"+correct_answer
			}else if(section !== "ga" && !isNaN(ans)){
			
				correct_answer = parseFloat(computer_science[parseInt(question_number)])
				
				if(correct_answer == ans){
					correct++;
					
					
					if( i > 10 & i <=35 ){
						marks_correct[1]++
					} else if (i > 35 && i <=65){
						marks_correct[2]++
					}
					
					document.images[i].parentNode.parentNode.parentNode.parentNode.style.border = "thick solid green";
					console.log("Q "+i+" correct");
				}else{
					incorrect++;
					
					if( i > 10 & i <=35 ){
						marks_incorrect[1]++
					} else if (i > 35 && i <=65){
						marks_incorrect[2]++
					}
					
					document.images[i].parentNode.parentNode.parentNode.parentNode.style.border = "thick solid red";
					console.log("Q "+i+" incorrect");
				}
				document.images[i].parentNode.innerHTML = document.images[i].parentNode.innerHTML  + "<hr/><strong>Made Easy Answer :  </strong>"+correct_answer
			}else if(isNaN(ans)){
				not_attempted++;
				console.log("NA "+i);
			}
		}

		var summary = "Correct : <strong class='text-success'>"+correct+"</strong>, Incorrect : <strong class='text-danger'>"+incorrect+"</strong> Not Attempted : "+not_attempted;
		summary+="<br/>Total questions "+(correct+incorrect+not_attempted);
		
		summary+="<br/><strong class='text-success'>Correct 1 Marks : "+marks_correct['1']+"</strong>";
		summary+="<br/><strong class='text-success'>Correct 2 Marks : "+marks_correct['2']+"</strong>";
		
		summary+="<br/><strong class='text-danger'>Incorrect 1 Marks : "+marks_incorrect['1']+"</strong>";
		summary+="<br/><strong class='text-danger'>Incorrect 2 Marks : "+marks_incorrect['2']+"</strong>";
		
		summary+="<br/>Questions with no answer or multiple answers are marked in yellow; There are total of "+doubtful+" question(s).";

		document.getElementById('summary').innerHTML = summary;

		</script>
	<?php
	}else{
		?>
		Enter the web page url of GATE response <input type="text"/>
		<button class="btn btn-info">Evaluate</button>
		<script>
			jQuery('button').click(function(){				
				ga('send', 'event','gate-evaluator',jQuery('input').val());
				window.location = "?response="+jQuery('input').val();
			});
		</script>
	<?php
	}
?>
</div>

</div>
</body>
</html>