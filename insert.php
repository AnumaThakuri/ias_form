<?php
require "config.php";

   if((isset($_POST['submit']))){

    $sec1_program_content =$_POST['sec1_program_content'];
    $sec1_length_course =$_POST['sec1_length_course'];
    $sec1_likemost_aboutcourse =$_POST['sec1_likemost_aboutcourse'];
    $sec1_likeleast_aboutcouse =$_POST['sec1_likeleast_aboutcouse'];
    $sec1_course_leftchanged = $_POST['sec1_course_leftchanged'];
    $secBFamiliarisation= $_POST['training_learn'];
    $secBunderstandingLocalViews= $_POST['useful_training_job_immediately'] ;
    $secBUnderstandingFormNature=$_POST['useful_training_job_future'];
    $secBUnderstandingStateGeo=$_POST['training_practical_oriented'];
    $secBUnderstandingprevailingmechanisms=$_POST['course_impression'];
    $secBEmerging=$_POST['emerging'];
    $secBPracticalProject=$_POST['practical'];
    $secBPreparation=$_POST['preparation'];
    $secBLearning=$_POST['learning'];
    $secC_nps=$_POST['secC_nps'];
    $secC_visit_belur=$_POST['secC_visit_belur'];
    $secC_intro_stateadmin=$_POST['secC_intro_stateadmin'];
    $secC_stateprotocol=$_POST['secC_stateprotocol'];
    $secC_e_commerce_wb=$_POST['secC_e_commerce_wb'];
    $secC_Bengali_Language_Literature=$_POST['secC_Bengali_Language_Literature'];
    $secC_Demography_Bengal=$_POST['secC_Demography_Bengal'];
    $secC_amitava2=$_POST['secC_amitava2'];
    $secC_Public_Financial_Management=$_POST['secC_Public_Financial_Management'];
    $secC_Economic_History_Bengal=$_POST['secC_Economic_History_Bengal'];
    $secC_Architectural_Heritage_Bengal=$_POST['secC_Architectural_Heritage_Bengal'];
    $secC_culture_rural_developmen=$_POST['secC_culture_rural_developmen'];
    $secC_amitava3=$_POST['secC_amitava3'];
    $secC_Rivers_Bengal=$_POST['secC_Rivers_Bengal'];
    $secC_Biodiversity_heritage=$_POST['secC_Biodiversity_heritage'];
    $secC_Urban_Local_Government=$_POST['secC_Urban_Local_Government'];
    $secC_Experience_sharing=$_POST['secC_Experience_sharing'];
    $secC_HRMS=$_POST['secC_HRMS'];
    $secC_iFMS=$_POST['secC_iFMS'];
    $secC_Interactive_Session=$_POST['secC_Interactive_Session'];
    $secC_Duare_Sarkar=$_POST['secC_Duare_Sarkar'];
    $secC_Field_visit_IT_Electronics_Department=$_POST['secC_Field_visit_IT_Electronics_Department'];
    $secC_Health_Family_Welfare=$_POST['secC_Health_Family_Welfare'];
    $secC_Bengali_Language_Culture=$_POST['secC_Bengali_Language_Culture'];
    $secC_Issues_related_Forests=$_POST['secC_Issues_related_Forests'];
    $secC_Service_Rules=$_POST['secC_Service_Rules'];
    $secC_Minorities=$_POST['secC_Minorities'];
    $secC_Gov_programme_improvement_agri=$_POST['secC_Gov_programme_improvement_agri'];
    $secC_Food_Security=$_POST['secC_Food_Security'];
    $secC_Promotion_fisheries=$_POST['secC_Promotion_fisheries'];
    $secC_Ben_Lang_Culture_Sovan_Tarafdar=$_POST['secC_Ben_Lang_Culture_Sovan_Tarafdar'];
    $secC_Government_Accounts=$_POST['secC_Government_Accounts'];
    $secC_Experience_sharing_Suresh_Kumar=$_POST['secC_Experience_sharing_Suresh_Kumar'];
    $secC_Sovan_Tarafdar=$_POST['secC_Sovan_Tarafdar'];
    $secC_Working_Pachayats=$_POST['secC_Working_Pachayats'];
    $secC_Development_Food_Processing=$_POST['secC_Development_Food_Processing'];
    $secC_Livestock_Poultry=$_POST['secC_Biodiversity_heritage'];
    $secC_Anindya_Sekhar=$_POST['secC_Anindya_Sekhar'];
    $secC_eGovernance_Projects=$_POST['secC_eGovernance_Projects'];
    $secC_Team_Building_Work_Life_Balance=$_POST['secC_Team_Building_Work_Life_Balance'];
    $secC_Hist_WB_Jawhar_Sircar=$_POST['secC_Hist_WB_Jawhar_Sircar'];
    $secC_Police_Civil_Administration=$_POST['secC_Police_Civil_Administration'];
    $secC_Anindya_Sekhar1=$_POST['secC_Anindya_Sekhar1'];
    $secC_GIS_Applications=$_POST['secC_GIS_Applications'];
    $secC_Kolkata_Tour=$_POST['secC_Kolkata_Tour'];
    $secC_Implementation_Women_Child=$_POST['secC_Implementation_Women_Child'];
    $secC_Beng_Lang_Cul_Amitava_Das=$_POST['secC_Beng_Lang_Cul_Amitava_Das'];
    $secC_Disciplinary_Proceedings_Vigilance=$_POST['secC_Disciplinary_Proceedings_Vigilance'];
    $secC_BSK=$_POST['secC_BSK'];
    $secC_Cr_P_C=$_POST['secC_Cr_P_C'];
    $secC_Tourism_promotion=$_POST['secC_Tourism_promotion'];
    $secC_Beng_Film_Appreciation=$_POST['secC_Beng_Film_Appreciation'];
    $secC_Beng_LangCul_swati_guha=$_POST['secC_Beng_LangCul_swati_guha'];
    $secC_Criminal_Procedure=$_POST['secC_Criminal_Procedure'];
    $secC_Case_Study_Pradip_Bhattacharya=$_POST['secC_Case_Study_Pradip_Bhattacharya'];
    $secC_Trends_Beng_Literature=$_POST['secC_Trends_Beng_Literature'];
    $secC_Castes_Tribes_WB=$_POST['secC_Castes_Tribes_WB'];
    $secC_das=$_POST['secC_das'];
    $secC_Appreciating_Music_bengal=$_POST['secC_Appreciating_Music_bengal'];
    $secC_Cash_Book_Analysis=$_POST['secC_Cash_Book_Analysis'];
    $secC_Approach_and_Methodology=$_POST['secC_Approach_and_Methodology'];
    $secC_Amitava_Das=$_POST['secC_Amitava_Das'];
    $secC_Banglar_Bhumi_Bhuchitra=$_POST['secC_Banglar_Bhumi_Bhuchitra'];
    $secC_e_Nathikaran=$_POST['secC_e_Nathikaran'];
    $secC_Deoacha_Pachami_Coal_Mine=$_POST['secC_Deoacha_Pachami_Coal_Mine'];
    $secC_Successful_UPSC=$_POST['secC_Successful_UPSC'];
    $secC_Paschim_Banga_Society=$_POST['secC_Paschim_Banga_Society'];
    $secC_Culinary_Legacy_Cuisine=$_POST['secC_Culinary_Legacy_Cuisine'];
    $secC_Disaster_Management_Issues=$_POST['secC_Disaster_Management_Issues'];
    $secC_Health_Education_Poverty=$_POST['secC_Health_Education_Poverty'];
    $secC_Amitava=$_POST['secC_Amitava'];
    $secC_CrPC_WBLR_Act=$_POST['secC_CrPC_WBLR_Act'];
    $secC_Crafts_Handicrafts=$_POST['secC_Crafts_Handicrafts'];
    $secC_cooperative_Development=$_POST['secC_cooperative_Development'];
    $secC_Swati_Guha=$_POST['secC_Swati_Guha'];
    $secC_Painting_schools=$_POST['secC_Painting_schools'];
    $secC_Book_Reviews=$_POST['secC_Book_Reviews'];
    $secC_Dist_Attachment_Panel_Discussion=$_POST['secC_Dist_Attachment_Panel_Discussion'];
    $secC_Schools_Painting=$_POST['secC_Schools_Painting'];
    $secC_fairs_Festivals=$_POST['secC_fairs_Festivals'];
    $secC_Guha=$_POST['secC_Guha'];
    $secC_WBLR_Act=$_POST['secC_WBLR_Act'];
    $secC_Valedictory_Session=$_POST['secC_Valedictory_Session'];
    $sectionD=$_POST['sectionD'];
    $sectionD1=implode(",",$sectionD);
    $sectionE=$_POST['sectionE'];
    $sectionE_comment=$_POST['sectionE_comment'];
    $sectionF=$_POST['sectionF'];
    $sectionF1=implode(",",$sectionF);
    $sectionF_comment=$_POST['sectionF_comment'];
    $overall_i_would_rate_this_course=$_POST['overall_i_would_rate_this_course'];
    $other_learning_needs=$_POST['other_learning_needs'];
   

    
    $sql ="INSERT INTO `ias` (`sec1_program_content`,
    `sec1_length_course`,`sec1_likemost_aboutcourse`,`sec1_likeleast_aboutcouse`,
    `sec1_course_leftchanged`,`secBFamiliarisation`,`secBunderstandingLocalViews`,
    `secBUnderstandingFormNature`,`secBUnderstandingStateGeo`,`secBUnderstandingprevailingmechanisms`,
    `secBEmerging`,`secBPracticalProject`,`secBPreparation`,`secBLearning`,`secC_nps`,`secC_visit_belur`,
    `secC_intro_stateadmin`,`secC_stateprotocol`,`secC_e_commerce_wb`,
    `secC_Bengali_Language_Literature`,`secC_Demography_Bengal`,`secC_amitava2`,
    `secC_Public_Financial_Management`,`secC_Economic_History_Bengal`,
    `secC_Architectural_Heritage_Bengal`,`secC_culture_rural_developmen`,`secC_amitava3`,`secC_Rivers_Bengal`,
    `secC_Biodiversity_heritage`,`secC_Urban_Local_Government`,
    `secC_Experience_sharing`,`secC_HRMS`,`secC_iFMS`,`secC_Interactive_Session`,
    `secC_Duare_Sarkar`,`secC_Field_visit_IT_Electronics_Department`,
    `secC_Health_Family_Welfare`,`secC_Bengali_Language_Culture`,`secC_Issues_related_Forests`,
    `secC_Service_Rules`,`secC_Minorities`,`secC_Gov_programme_improvement_agri`,
    `secC_Food_Security`,`secC_Promotion_fisheries`,`secC_Ben_Lang_Culture_Sovan_Tarafdar`,
    `secC_Government_Accounts`,`secC_Experience_sharing_Suresh_Kumar`,`secC_Sovan_Tarafdar`,
    `secC_Working_Pachayats`,`secC_Development_Food_Processing`,`secC_Livestock_Poultry`,
    `secC_Anindya_Sekhar`,`secC_eGovernance_Projects`,
    `secC_Team_Building_Work_Life_Balance`,`secC_Hist_WB_Jawhar_Sircar`,
    `secC_Police_Civil_Administration`,`secC_Anindya_Sekhar1`,
    `secC_GIS_Applications`,`secC_Kolkata_Tour`,`secC_Implementation_Women_Child`,
    `secC_Beng_Lang_Cul_Amitava_Das`,`secC_Disciplinary_Proceedings_Vigilance`,
    `secC_BSK`,`secC_Cr_P_C`,`secC_Tourism_promotion`,`secC_Beng_Film_Appreciation`,
    `secC_Beng_LangCul_swati_guha`,`secC_Criminal_Procedure`,
    `secC_Case_Study_Pradip_Bhattacharya`,`secC_Trends_Beng_Literature`,
    `secC_Castes_Tribes_WB`,`secC_das`,`secC_Appreciating_Music_bengal`,
    `secC_Cash_Book_Analysis`,`secC_Approach_and_Methodology`,`secC_Amitava_Das`,`secC_Banglar_Bhumi_Bhuchitra`,
    `secC_e_Nathikaran`,`secC_Deoacha_Pachami_Coal_Mine`,`secC_Successful_UPSC`,
    `secC_Paschim_Banga_Society`,`secC_Culinary_Legacy_Cuisine`,
    `secC_Disaster_Management_Issues`,`secC_Health_Education_Poverty`,`secC_Amitava`,`secC_CrPC_WBLR_Act`,
    `secC_Crafts_Handicrafts`,`secC_cooperative_Development`,`secC_Swati_Guha`,`secC_Painting_schools`,
    `secC_Book_Reviews`,`secC_Dist_Attachment_Panel_Discussion`,`secC_Schools_Painting`,`secC_Guha`,
    `secC_fairs_Festivals`,`secC_WBLR_Act`,`secC_Valedictory_Session`,
    `sectionD`,`sectionE`,`sectionE_comment`,`sectionF`,`sectionF_comment`,
    `overall_i_would_rate_this_course`,`other_learning_needs`)

     VALUES 

     ('$sec1_program_content','$sec1_length_course','$sec1_likemost_aboutcourse',
     '$sec1_likeleast_aboutcouse','$sec1_course_leftchanged','$secBFamiliarisation',
     '$secBunderstandingLocalViews', '$secBUnderstandingFormNature' ,
     '$secBUnderstandingStateGeo',' $secBUnderstandingprevailingmechanisms',
     '$secBEmerging',' $secBPracticalProject','$secBPreparation','$secBLearning',
     '$secC_nps','$secC_visit_belur','$secC_intro_stateadmin','$secC_stateprotocol',
     '$secC_e_commerce_wb','$secC_Bengali_Language_Literature','$secC_Demography_Bengal','$secC_amitava2',
     '$secC_Public_Financial_Management','$secC_Economic_History_Bengal',
     '$secC_Architectural_Heritage_Bengal','$secC_culture_rural_developmen','$secC_amitava3',
     '$secC_Rivers_Bengal','$secC_Biodiversity_heritage','$secC_Urban_Local_Government',
     '$secC_Experience_sharing','$secC_HRMS','$secC_iFMS','$secC_Interactive_Session',
     '$secC_Duare_Sarkar','$secC_Field_visit_IT_Electronics_Department',
     '$secC_Health_Family_Welfare','$secC_Bengali_Language_Culture',
     '$secC_Issues_related_Forests','$secC_Service_Rules','$secC_Minorities',
     '$secC_Gov_programme_improvement_agri','$secC_Food_Security','$secC_Promotion_fisheries',
     '$secC_Ben_Lang_Culture_Sovan_Tarafdar' ,'$secC_Government_Accounts',
     '$secC_Experience_sharing_Suresh_Kumar','$secC_Sovan_Tarafdar','$secC_Working_Pachayats',
     '$secC_Development_Food_Processing','$secC_Livestock_Poultry',
     '$secC_Anindya_Sekhar','$secC_eGovernance_Projects',
     '$secC_Team_Building_Work_Life_Balance','$secC_Hist_WB_Jawhar_Sircar',
     '$secC_Police_Civil_Administration','$secC_Anindya_Sekhar1',
     '$secC_GIS_Applications','$secC_Kolkata_Tour','$secC_Implementation_Women_Child',
     '$secC_Beng_Lang_Cul_Amitava_Das','$secC_Disciplinary_Proceedings_Vigilance',
     '$secC_BSK','$secC_Cr_P_C','$secC_Tourism_promotion','$secC_Beng_Film_Appreciation',
     '$secC_Beng_LangCul_swati_guha','$secC_Criminal_Procedure',
     '$secC_Case_Study_Pradip_Bhattacharya','$secC_Trends_Beng_Literature',
     '$secC_Castes_Tribes_WB','$secC_das',
     '$secC_Appreciating_Music_bengal','$secC_Cash_Book_Analysis',
     '$secC_Approach_and_Methodology','$secC_Amitava_Das','$secC_Banglar_Bhumi_Bhuchitra','$secC_e_Nathikaran',
     '$secC_Deoacha_Pachami_Coal_Mine','$secC_Successful_UPSC','$secC_Paschim_Banga_Society',
     '$secC_Culinary_Legacy_Cuisine','$secC_Disaster_Management_Issues',
     '$secC_Health_Education_Poverty','$secC_Amitava','$secC_CrPC_WBLR_Act',
     '$secC_Crafts_Handicrafts','$secC_cooperative_Development','$secC_Swati_Guha','$secC_Painting_schools',
     '$secC_Book_Reviews','$secC_Dist_Attachment_Panel_Discussion','$secC_Schools_Painting','$secC_Guha',
     '$secC_fairs_Festivals','$secC_WBLR_Act','$secC_Valedictory_Session',
     '$sectionD1','$sectionE','$sectionE_comment','$sectionF1','$sectionF_comment',
     '$overall_i_would_rate_this_course','$other_learning_needs') ";

     
    $fire= mysqli_query($con,$sql);
    if($fire){
        echo "Your data has been submitted successfully, Thank you!";
        
      }
      else{
        echo "Your data has not submitted, so please check again";
      }

    

   }
?>