<?php /* Template Name: ufd*/ ?>
<?php get_header(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>UFD</title>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js" integrity="sha256-sPB0F50YUDK0otDnsfNHawYmA5M0pjjUf4TvRJkGFrI=" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script>
    $(document).on("keyup", ".a1", function() {
    var sum = 0;
    $(".a1").each(function(){
        sum += +$(this).val();
    });
    
    $(".sol1").html(sum);
    
});

    $(document).on("keyup", ".a1, .a2, .a3, .a5, .a6", function() {
    var sum = 0;
    $(".a1").each(function(){
        sum += +$(this).val();
    });

    var sum1 = 0;
    $(".a2").each(function(){
        sum1 += +$(this).val();
    });

    var sum2 = 0;
    $(".a3").each(function(){
        sum2+= +$(this).val();
    });

    var sum3 = 0;
    $(".a5").each(function(){
        sum3 += +$(this).val();
    });

    var sum4 = 0;
    $(".a6").each(function(){
        sum4 += +$(this).val();
    });
    
    $(".sol6").html(sum+(sum1-sum2)+(sum3-sum4));
    
});

    $(document).on("keyup", ".a2", function() {
    var sum = 0;
    $(".a2").each(function(){
        sum += +$(this).val();
    });
    
    $(".sol2").html(sum);
    
}); 

 $(document).on("keyup", ".a5", function() {
    var sum = 0;
    $(".a5").each(function(){
        sum += +$(this).val();
    });
    
    $(".sol4").html(sum);
    
});

 $(document).on("keyup", ".a7", function() {
    var sum = 0;
    $(".a7").each(function(){
        sum += +$(this).val();
    });
    
    $(".sol7").html(sum);
    
}); 

    $(document).on("keyup", ".a2, .a3", function() {
    var sum = 0;
    $(".a2").each(function(){
        sum += +$(this).val();
    });

    var summ=0;
    $(".a3").each(function(){
    	summ+= +$(this).val();
    });
    
    $(".sol3").html(sum-summ);
    
});

    $(document).on("keyup", ".a5, .a6", function() {
    var sum = 0;
    $(".a5").each(function(){
        sum += +$(this).val();
    });

    var summ=0;
    $(".a6").each(function(){
    	summ+= +$(this).val();
    });
    
    $(".sol5").html(sum-summ);
    
});
   


</script>
</head>
<body>
	<form action="" method="">
		<div class="form-group" style="text-align: center;">
			<label class="sol-label">In the Employment Tribunal</label>
			<input type="text" name="emp_tri">
		</div>
		
		<div class="form-group" style="text-align: right;">
			<label class="sol-label">Case No:</label>
			<input type="text" name="caseno">
		</div>

		<div class="form-group">
			<label class="sol-label">Between:</label><br>
			<div style="text-align: center;">
			    <input type="text" name="claimant" placeholder="Claimant">
			    <label class="sol-label">AND</label>
			    <input type="text" name="Respondent" placeholder="Respondent">
			</div>
		</div>
<br>
		<div class="form-group" style="text-align: center;">
			<label class="sol-label">Claimant's schedule of loss as at </label><input type="text" name="solat" class="solat">
		</div>

		<div class="form-group">
			<label class="sol-label">1. OVERVIEW</label>
		</div>

		<div class="form-group">
			<label class="sol-label">Date of Birth </label><input type="date" name="dob" class="dob">
		</div>

		<div class="form-group">
			<label class="sol-label">Date of Termination </label><input type="date" name="dot" class="dot">
		</div>

		<div class="form-group">
			<label class="sol-label">Age of Termination </label><input type="number" name="agt" class="agt">
		</div>

		<div class="form-group">
			<label class="sol-label">Period of Service:  </label><label class="sol-label">From</label><input type="date" name="posfrom" class="posfrom"><label class="sol-label">to</label><input type="date" name="posto" class="posto">
		</div>

		<div class="form-group">
			<label class="sol-label">Years of Continuous Service </label><input type="number" name="yocs" class="yocs"><label class="sol-label">years</label>
		</div>
		<div class="form-group">
			<label class="sol-label">Average net weekly pay  </label><input type="text" name="anwp" class="anwp">
		</div>

		<div class="form-group">
			<label class="sol-label">Gross weekly pay</label><input type="text" name="anwp" class="anwp">
		</div>

		<div class="form-group">
			<label class="sol-label">Your employer’s annual pension contributions/annual pension benefit:</label><input type="text" name="pension" class="pension" placeholder="Insert Amount">
		</div>

		<div class="form-group">
			<label class="sol-label">Annual value of bonus/other employment benefits:</label><input type="text" name="bonus" class="bonus" placeholder="Insert Amount" >
		</div>

		<div class="form-group">
			<label class="sol-label">Contractual Notice</label><input type="number" name="cn" class="cn"><select id="Contractualnoticse">
				<option class="week">Weeks</option>
				<option class="mnth" >Months</option>
			</select>
		</div>

		<div class="form-group">
			<label class="sol-label">Statutory Notice</label><input type="number" name="sn" class="sn"><select id="Statutorynotice">
				<option class="weeks">Weeks</option>
				<option class="mnths" >Months</option>
			</select>
		</div>

		<div class="form-group" class="hide1">
			<label class="sol-label">Earnings from new job from</label><input type="date" name="newjob" class="newjob">
		</div><br>
		<button class="delThis" id="delThis"> Delete this if you don't have a Job</button><br>

		<label class="sol-label">2. BASIC AWARD</label>

		<div class="form-group">
			<label class="sol-label">[Insert relevant multiplier] X [insert number of complete years’ service] X £ [insert amount of week’s pay (subject to statutory maximum)]:</label><input type="text" name="amwp" id="amwp" class="a1">
		</div>

		<div class="form-group">
			<label class="sol-label">Less any amounts already received for e.g., a statutory redundancy payment</label><input type="text" name="srp" id="srp" class="a1">
		</div>
		<button class="delThis2" id="delThis2">Remove this if you have not received any payments</button><br>

		<label class="sol-label">Total:</label><label class="sol-label" class="sol1" id="sol1" ></label><br>
		<label class="sol-label">3. COMPENSATORY AWARD</label><br>
		<label class="sol-label">Loss to date of tribunal hearing</label><br>

		<div class="form-group">
			<label class="sol-label">Loss of basic salary to date of tribunal ([insert number of weeks from effective date of termination] x £[insert net weekly basic pay]):</label><input type="text" name="lobs" id="lobs" class="a2">
		</div>

		<div class="form-group">
			<label class="sol-label">Loss of statutory rights:</label><input type="text" name="losr" id="losr" class="a2">
		</div>

		<div class="form-group">
			<label class="sol-label">Loss of bonus and/or commission to date of tribunal:</label><input type="text" name="lobc" id="lobc" class="a2">
		</div>

		<div class="form-group">
			<label class="sol-label">Loss of pension benefit to date of tribunal [specify details]:</label><input type="text" name="lopb" id="lopb" class="a2">
		</div>

		<div class="form-group">
			<label class="sol-label">Loss of [insert details of other benefits] to date of tribunal:</label><input type="text" name="lodot" id="lodot" class="a2">
		</div>

		<div class="form-group">
			<label class="sol-label">Expenses incurred to date of tribunal: [specify details ]</label><input type="text" name="eidot" id="eidot" class="a2">
		</div>
        <div class="form-group">
			<label class="sol-label">Loss of long notice period:</label><input type="text" name="llnp" id="llnp" class="a2">
		</div>

		<label class="sol-label">Losses to date of tribunal (past loss):</label><label class="sol-label" class="sol2" id="sol2" ></label><br>

		<label class="sol-label">LESS</label> 

		<div class="form-group">
			<label class="sol-label">Ex gratia payment:</label><input type="text" name="egp" class="a3" id="egp">
		</div>

		<div class="form-group">
			<label class="sol-label">Sums obtained through mitigation to date of tribunal: [set out relevant details of each job that you have had, for example; two weeks' temporary shop work [insert dates] at £200 net per week: £400, three weeks' part-time work at estate agency [insert dates] at £50 net per week: £150 etc.]</label><input type="text" name="stm" class="a3" id="stm">
		</div>

		<label class="sol-label">Total past loss:</label><label class="sol-label" class="sol3" id="sol3"></label> <br>

		<label class="sol-label">Future loss</label><br>

		<div class="form-group">
			<label class="sol-label">Future loss of earnings ([insert period] x £[insert net weekly basic pay]):</label><input type="text" name="floe" id="floe" class="a5">
		</div>

		<div class="form-group">
			<label class="sol-label">Future loss of pension: [insert details, i.e. number of weeks at £x per week]</label><input type="text" name="flop" id="flop" class="a4">
		</div>

		<div class="form-group">
			<label class="sol-label">Future loss of [insert details of other benefits]:[insert details, i.e. number of weeks at £x per week]</label><input type="text" name="floid" id="floid" class="a4">
		</div>	


		<div class="form-group">
			<label class="sol-label">Future expenses: [insert details]</label><input type="text" name="fe" id="fe" class="a5">
		</div>
		<label class="sol-label">Future losses:</label> <label class="sol-label" class="sol4" id="sol4"></label><br>
		<label class="sol-label">LESS </label>
		<div class="form-group">
			<label class="sol-label">Future mitigation: [insert details and net pay of any new job. If work is only temporary, give details, including end date]</label><input type="text" name="fm" class="a6" id="fm">
		</div>
		<label class="sol-label">Total future loss:</label><label class="sol-label" class="sol5" id="sol5" ></label><br>

		<label class="sol-label">Total loss and adjustments</label>

		<div class="form-group">
			<label class="sol-label">Uplift in compensatory award due to Respondent's unreasonable failure to comply with ACAS Code: insert percentage up to 25% x Total past loss + Total future loss:]</label><input type="text" name="uca" id="uca" class="a7">

		</div>

		<div class="form-group">
			<label class="sol-label">Add award for failure to provide written statement of particulars of employment (either two or four weeks' pay):]</label><input type="text" name="aaf" id="aaf" class="a7">

		</div>
		<label class="sol-label">Total:</label><label class="sol-label" id="sol7" class="sol7"></label><br>

		<label class="sol-label">LESS</label><br>

		<div class="form-group">
			<label class="sol-label">Deduction for any enhanced redundancy payment in excess of the basic award:</label><input type="text" name="dfae" id="dfae" class="a8">

		</div>

		<label class="sol-label">Compensatory award grand total:</label><label class="sol-label" id="sol6" class="sol6"></label>


	</form>




</body>
</html>