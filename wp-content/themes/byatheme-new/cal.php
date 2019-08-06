<?php /* Template Name: Calculator */ ?>
 <?php get_header(); ?>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
 	<div class="row">
 		<div class="col-md-3">
 			<div class="col-md-6">
 					<form id="formid" method="post">
 						<div class="form-group">
 							<label>Effective date of termination of employment (“EDT”)</label>
 							<input type="date" name="tdate" id="input_5_9" class="tdate">
 						</div>
 						<div class="form-group">
 							<label>Date ACAS Early Conciliation was requested</label>
 							<input type="date" id="input_5_10" name="acasdate" class="acasdate">
 						</div>
 						<div class="form-group">
 							<label>Date ACAS issued the Early Conciliation Certificate</label>
 							<input type="date" name="certdate" id="input_5_11" class="certdate">
 						</div>
 						<div> 
 							<label id="bomb" style="display:none;">Your Deadline Date:</label>
 							<span id="field_5_13"></span>
 						
 						</div>
 					</form>
 					
 			</div>
 		</div>
 	</div>
<!-- <script type="text/javascript">
    
     function hh(){

        var date1=jQuery('.tdate').val();
        var nd11= moment(date1).format('DD/MM/YYYY');
        var datesm = nd11.split("/");
        var newDate_ = datesm[1]+"/"+datesm[0]+"/"+datesm[2];
        var str = datesm[1];
        str = Number(str).toString();
        var month1 = str;
        var new_date1=moment(date1).add(3, 'M');
        var nd1= moment(new_date1).format('DD/MM/YYYY');
                                                                        //nd.setDate( dt.getDate() - 10 );
                                                                        // var aa=nd1.setDate(nd1.getDate() + 1);
                                                                        // alert(aa);
        
                                                                        // var new_date_=  new_date1.setDate(new_date1.getDate() + 1);
                                                                        // console.log(new_date_);
        var dates1 = nd1.split("/");
        var newDate = dates1[1]+"/"+dates1[0]+"/"+dates1[2];
        var yy = new Date(newDate).getTime();
        

    //Date of applying ACAS

        var date2=jQuery('.acasdate').val();
        var nd2= moment(date2).format('DD/MM/YYYY');
       
        var dates2 = nd2.split("/");
        var newDate2 = dates2[1]+"/"+dates2[0]+"/"+dates2[2];
        var month2= dates2[1];
        var yy2 = new Date(newDate2).getTime();
        var date = new Date(nd2);
      

    //Date if getting certificate  

          var date3=jQuery('.certdate').val();
          var nd3= moment(date3).format('DD/MM/YYYY');
          var dates3 = nd3.split("/");
          var newDate3 = dates3[1]+"/"+dates3[0]+"/"+dates3[2];
          var month3= dates3[1];

        if(yy2 > yy){
          document.getElementById('date').innerHTML = "Invalid Date";
        }
        else{
          
           var now = new Date();
           alert(now);

          var nv1= 3 - (month2-month1);
          
          var nv2= month3-month2;
          
          var newDate__= (parseInt(datesm[0])-2)- (parseInt(dates2[0])- parseInt(dates3[0]));
          alert("New Date"+newDate__);


          var fm_=(month2-month1)+nv1+nv2;
          var fm= parseInt(fm_);
          var months= fm+parseInt(datesm[1]);
          alert("New Month"+months);
          var final_date = moment(date1).add(fm, 'M');
          var year= parseInt(datesm[2])- parseInt(dates2[2]) + parseInt(dates3[2]);
          alert("New Year"+year);
          var nd3= moment(final_date).format('DD/MM/YYYY');
          document.getElementById('date').innerHTML = "Final Date: "+nd3;
        }

   // function hh(){


</script>
 -->
 <?php get_footer(); ?>