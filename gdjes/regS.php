<?php
    include('config.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enrollment</title>
    <link rel="stylesheet" href="styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    <h1>Enrollment Form</h1>
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"])?>" method="POST" id="enrollmentForm">

        <!-- First Part -->
        <div class="form-set" id="balikAralInfo"  style="display: block;">
            <label for="balikAral">Balik aral ba ag batang ipapalista?</label><br>
            <input type="radio" id="balikAralNo" name="aralStatus" value="HINDI">
            <label for="balikAralNo">HINDI</label><br>
            <input type="radio" id="balikAralYes" name="aralStatus" value="OO dahil siya ay nag-DROP o huminto sa pag-aaral noong nakaraang taon">
            <label for="balikAralYes">OO dahil siya ay nag-DROP o huminto sa pag-aaral noong nakaraang taon.</label><br>
            <button type="button" onclick="showNextSet('enrollmentInfo')">Next</button>
        </div>
        
        
        <!-- First Part --> 
        <!-- Returnee -->
         <div class="form-set" id="returnee"  style="display: none;">
            <label for="returnee">Ano ang huling baitang na natapos?</label><br>
            <select id="returnee" name="returnee">
                <option value="0">KINDER</option>
                <option value="1">GRADE 1</option>
                <option value="2">GRADE 2</option>
                <option value="3">GRADE 3</option>
                <option value="4">GRADE 4</option>
                <option value="5">GRADE 5</option>
                <option value="6">GRADE 6</option>
                <option value="7">ALS</option>
            </select><br>
   
            <!-- Last school attended -->
           <label for="lastSchoolAttended">Ano ang huling paaralan na pinasukan?</label><br>
           <input type="text" id="lastSchoolAttended" name="lastSchoolAttended"><br>
   
           <!-- Last school year attended -->
           <label for="lastSchoolYearAttended">Anong panuruang taon ang natapos ng mag-aaral?</label><br>
           <input type="text" id="lastSchoolYearAttended" name="lastSchoolYearAttended"><br>

           <button type="button" onclick="showPrevSet('balikAralInfo')">Back</button>
            <button type="button" onclick="showNextSet('enrollmentInfo')">Next</button>
        </div>

        <!-- Second Part -->
        <!-- Grade Level -->
        <div class="form-set" id="enrollmentInfo" style="display: none;">
            <label for="grade_level">Saang Grade Level mo nais ipalista o i-ENROLL ang inyong anak?</label><br>
            <select id="grade_level" name="grade_level">
                <option value="0">KINDER</option>
                <option value="1">GRADE 1</option>
                <option value="2">GRADE 2</option>
                <option value="3">GRADE 3</option>
                <option value="4">GRADE 4</option>
                <option value="5">GRADE 5</option>
                <option value="6">GRADE 6</option>
                <option value="7">ALS</option>
            </select><br>

            <!-- School Year -->
            <label for="school_year">School Year</label><br>
            <input type="text" id="school_year" name="school_year"><br>

            <!-- Learner Reference Number -->
            <label for="lrn">May LRN (Learner Reference Number) ba ang inyong anak?</label><br>
            <input type="radio" id="lrn_yes" name="lrn_status" value="1">
            <label for="lrn_yes">Mayroon siyang LRN</label><br>
            <input type="radio" id="lrn_no" name="lrn_status" value="0">
            <label for="lrn_no">Wala siyang LRN dahil sa ay mag-kiKinder pa lang</label><br>

            <!-- PSA Birth Certificate No. -->
            <label for="psa_birth_cert">PSA Birth Certificate No.</label><br>
            <input type="text" id="psa_birth_cert" name="psa_birth_cert"><br>

            <!-- Learner Reference Number (LRN) -->                                                     <!--set this as if else statement then provide LRN-->
            <label for="lrn_number">Learners Reference Number (LRN)</label><br>
            <input type="text" id="lrn_number" name="lrn_number"><br>

            <!-- Last Name, First Name, Middle Name -->
            <label for="last_name">LAST NAME NG BATA (Apelyido)</label><br>
            <input type="text" id="last_name" name="last_name"><br>

            <label for="first_name">FIRST NAME NG BATA (Pangalan)</label><br>
            <input type="text" id="first_name" name="first_name"><br>

            <label for="middle_name">MIDDLE NAME NG BATA (Gitnang Pangalan)</label><br>
            <input type="text" id="middle_name" name="middle_name"><br>

            <!-- Extension Name -->
            <label for="extension_name">EXTENSION NAME</label><br>
            <select id="extension_name" name="extension_name">
                <option value="wala">wala</option>
                <option value="JR">JR</option>
                <option value="I">I</option>
                <option value="II">II</option>
                <option value="III">III</option>
                <option value="IV">IV</option>
                <option value="V">V</option>
                <option value="VI">VI</option>
            </select><br>

            <!-- Date of Birth -->                                                                      <!--set age when bday is inputted -->
            <label for="birth_date">Petsa ng Kapanganakan</label><br>
            <input type="date" id="birth_date" name="birth_date"><br>

            <!-- Age on October 31, 2023 -->                                                    
            <label for="age_on_oct_31">Ilang taon ang bata sa October 31, 2023?</label><br>
            <input type="text" id="age_on_oct_31" name="age_on_oct_31"><br>

            <!-- Gender -->
            <label for="gender">Kasarian ng Bata</label><br>
            <input type="radio" id="male" name="gender" value="male">
            <label for="male">Lalaki</label><br>
            <input type="radio" id="female" name="gender" value="female">
            <label for="female">Babae</label><br>

            <!-- Indigenous Group -->
            <label for="indigenous_group">Nabibilang sa katutubong grupo/ Komunidad ng Katutubong Kultural ang mag-aaral</label><br>
            <input type="radio" id="indigenous_yes" name="indigenous_group" value="1">
            <label for="indigenous_yes">OO</label><br>
            <input type="radio" id="indigenous_no" name="indigenous_group" value="0">
            <label for="indigenous_no">HINDI</label><br>

            <!-- Indigenous Group Name -->                                                                  <!-- set this as if else statement -->
            <label for="indigenous_group_name">Kung OO ang sagot mo sa tanong, saang katutubong grupo kabilang ang mag-aaral?</label><br>
            <input type="text" id="indigenous_group_name" name="indigenous_group_name"><br>

            <!-- Primary Language -->
            <label for="primary_language">Ano ang kinagisnang wika ng mag-aaral?</label><br>
            <select id="primary_language" name="primary_language">
                <option value="Filipino">Filipino</option>
                <option value="Bikolano">Bikolano</option>
                <option value="Cebuano">Cebuano</option>
                <option value="Chinese">Chinese</option>
                <option value="English">English</option>
                <option value="Ilocano">Ilocano</option>
                <option value="Kapampangan">Kapampangan</option>
                <option value="Maguindanaoan">Maguindanaoan</option>
                <option value="Manobo">Manobo</option>
                <option value="Hihonggo">Hihonggo</option>
                <option value="Philippine Sign Language">Philippine Sign Language</option>
                <option value="Tausug">Tausug</option>
                <option value="Waray">Waray</option>
                <option value="Ybanag">Ybanag</option>
                <option value="Others">Others</option>                                  <!-- if others is selected get user input-->
            </select><br>

            <!-- Religion -->
            <label for="religion">Relihiyon</label><br>
            <select id="religion" name="religion">
                <option value="Christianity">Christianity</option>
                <option value="Aglipayan">Aglipayan</option>
                <option value="Angelican">Angelican</option>
                <!-- Add other religion options here -->                                     <!-- if others is selected get user input-->
            </select><br>

            <!-- Special Needs -->
            <label for="special_needs">Ang mag-aaral ba ay nangangailangan ng espesyal na tulong sa pag-aaral?</label><br>
            <input type="radio" id="special_needs_no" name="special_needs" value="0">
            <label for="special_needs_no">WALA</label><br>
            <input type="radio" id="special_needs_yes" name="special_needs" value="1">
            <label for="special_needs_yes">MAYROON</label><br>

            <!-- Special Needs Description -->                                      <!-- if others is selected get user input-->
            <label for="special_needs_description">Kung MAYROON, i-type kung ano ang natatanging kalagayan o kundisyon ng bata.</label><br>
            <input type="text" id="special_needs_description" name="special_needs_description"><br>         

            <!-- Complete Address -->                                                       <!-- js for addresses --> 
            <div >
                <label >Region *</label>
                <select name="region" id="region"></select>
                <input type="hidden" name="region_text" id="region-text" required>
            </div>
            <div >
                <label >Province *</label>
                <select name="province" id="province"></select>
                <input type="hidden" name="province_text" id="province-text" required>
            </div>
            <div >
                <label >City / Municipality *</label>
                <select name="city" id="city"></select>
                <input type="hidden" name="city_text" id="city-text" required>
            </div>
            <div >
                <label >Barangay *</label>
                <select name="barangay" id="barangay"></select>
                <input type="hidden" name="barangay_text" id="barangay-text" required>
            </div>
            <div >
                <label for="street-text" >Street</label>
                <input type="text" name="street_text" id="street-text">
            </div>
            <div >
                <label for="house_number" >House Number</label>
                <input type="text" name="house_number" id="house_number">
            </div>

            <button type="button" onclick="showPrevSet('returnee')">Back</button>
            <button type="button" onclick="showNextSet('householdInfo')">Next</button>
        </div>
        

        <!-- Third Part -->
        <!-- Father's Information -->                               <!-- Last Name, First Name, Middle Name -->
        <div class="form-set" id="householdInfo" style="display: none;">
            <label for="last_name">LAST NAME (Apelyido)</label><br>
            <input type="text" id="last_name" name="last_name"><br>

            <label for="first_name">FIRST NAME (Pangalan)</label><br>
            <input type="text" id="first_name" name="first_name"><br>

            <label for="middle_name">MIDDLE NAME (Gitnang Pangalan)</label><br>
            <input type="text" id="middle_name" name="middle_name"><br>

            <!-- Extension Name -->
            <label for="extension_name">EXTENSION NAME</label><br>
            <select id="extension_name" name="extension_name">
                <option value="wala">wala</option>
                <option value="JR">JR</option>
                <option value="I">I</option>
                <option value="II">II</option>
                <option value="III">III</option>
                <option value="IV">IV</option>
                <option value="V">V</option>
                <option value="VI">VI</option>
            </select><br>

            <label for="father_phone">Numero sa Telepono or Cellphone ng Ama ng bata</label><br>
            <input type="text" id="father_phone" name="father_phone"><br>

            <label for="email">Email</label><br>
            <input type="email" id="email" name="email"><br>

            <!-- Mother's Information -->                               <!-- Last Name, First Name, Middle Name -->
            <label for="last_name">LAST NAME (Apelyido)</label><br>
            <input type="text" id="last_name" name="last_name"><br>

            <label for="first_name">FIRST NAME (Pangalan)</label><br>
            <input type="text" id="first_name" name="first_name"><br>

            <label for="middle_name">MIDDLE NAME (Gitnang Pangalan)</label><br>
            <input type="text" id="middle_name" name="middle_name"><br>

            <!-- Extension Name -->
            <label for="extension_name">EXTENSION NAME</label><br>
            <select id="extension_name" name="extension_name">
                <option value="wala">wala</option>
                <option value="JR">JR</option>
                <option value="I">I</option>
                <option value="II">II</option>
                <option value="III">III</option>
                <option value="IV">IV</option>
                <option value="V">V</option>
                <option value="VI">VI</option>
            </select><br>

            <label for="mother_phone">Numero sa Telepono or Cellphone ng INA ng bata</label><br>
            <input type="text" id="mother_phone" name="mother_phone"><br>

            <label for="email">Email</label><br>
            <input type="email" id="email" name="email"><br>

            <!-- Guardian's Information -->                               <!-- Last Name, First Name, Middle Name -->
            <label for="last_name">LAST NAME (Apelyido)</label><br>
            <input type="text" id="last_name" name="last_name"><br>

            <label for="first_name">FIRST NAME (Pangalan)</label><br>
            <input type="text" id="first_name" name="first_name"><br>

            <label for="middle_name">MIDDLE NAME (Gitnang Pangalan)</label><br>
            <input type="text" id="middle_name" name="middle_name"><br>

            <!-- Extension Name -->
            <label for="extension_name">EXTENSION NAME</label><br>
            <select id="extension_name" name="extension_name">
                <option value="wala">wala</option>
                <option value="JR">JR</option>
                <option value="I">I</option>
                <option value="II">II</option>
                <option value="III">III</option>
                <option value="IV">IV</option>
                <option value="V">V</option>
                <option value="VI">VI</option>
            </select><br>


            <label for="guardian_phone">Numero sa Telepono or Cellphone ng TAGAPAGALAGA/GUARDIAN ng bata</label><br>
            <label for="guardian_phone">ang numerong ito ay kinakailangang TAMA dahil dito magpapadala ng mensahe ang paaralan kung kinakailangan</label><br>
            <input type="text" id="guardian_phone" name="guardian_phone"><br>

            <label for="email">Email</label><br>
            <input type="email" id="email" name="email"><br>

            <!-- 4ps -->
            <label for="4ps">Kabilang ba ang pamilya ng bata sa 4ps ng DSWD?</label><br>
            <input type="radio" id="4ps_yes" name="4ps" value="1">
            <label for="4ps_yes">OO</label><br>
            <input type="radio" id="4ps_no" name="4ps" value="0">
            <label for="4ps_no">HINDI</label><br>

            <!-- 4ps Household ID -->                                                <!-- if others is selected get user input-->                                           
            <label for="4ps_id">Kung kabilang ang bata sa 4ps, Ilagay ang "HOUSEHOLD ID NUMBER".</label><br>
            <input type="text" id="4ps_id" name="4ps_id"><br>

            <button type="button" onclick="showPrevSet('enrollmentInfo')">Back</button>
            <button type="button" onclick="showNextSet('learningInfo')">Next</button>
        </div>
        
        <!--Fourth Part -->
        <!-- Learning Information -->                                      
        <div class="form-set" id="learningInfo" style="display: none;">
            <label for="household_info">Piliin ang angkop na mga sagot</label><br>
            <input type="checkbox" id="cellphone_tablet" name="learning_info[]" value="cellphone/tablet">
            <label for="cellphone_tablet">May sariling Cellphone/Tablet ang Bata</label><br>

            <input type="checkbox" id="computer" name="learning_info[]" value="Computer">
            <label for="computer">May computer sa bahay</label><br>

            <input type="checkbox" id="no_gadget" name="learning_info[]" value="no nadget">
            <label for="no_gadget">Walang sariling gadget ang bata</label><br>

            <input type="checkbox" id="tv" name="learning_info[]" value="television">
            <label for="tv">May tv sa bahay</label><br>

            <input type="checkbox" id="internet" name="learning_info[]" value="internet">
            <label for="internet">May internet connection sa bahay</label><br>

            <input type="checkbox" id="mobile_data" name="learning_info[]" value="mobile data">
            <label for="mobile_data">Mobile data lamang ang gamit para makaconnect sa internet</label><br>

            <!-- Distance Learning Preference -->
            <label for="distance_learning">Kung ang paaralan ay magpapatupad ng distance learning, ano ang nais mo para sa iyong anak?</label><br>
            <input type="radio" id="modular_printed" name="distance_learning" value="Modular Printed">
            <label for="modular_printed">Modular Printed</label><br>

            <input type="radio" id="modular_digital" name="distance_learning" value="Modular Digital">
            <label for="modular_digital">Modular Digital</label><br>

            <input type="radio" id="online" name="distance_learning" value="Online">
            <label for="online">Online</label><br>

            <input type="radio" id="educational_tv" name="distance_learning" value="Educational Television">
            <label for="educational_tv">Educational Television</label><br>

            <input type="radio" id="homeschooling" name="distance_learning" value="Homeschooling">
            <label for="homeschooling">Homeschooling</label><br>

            <input type="radio" id="blended" name="distance_learning" value="Blended">
            <label for="blended">Blended</label><br>

            <button type="button" onclick="showPrevSet('householdInfo')">Back</button>

             <!-- Submit Button -->
            <input type="submit" value="Submit">
        </div>



        
        
        <script src="form.js"></script>
        <script src="ph-address-selector.js"></script>
       
    </form>
</body>
</html>

