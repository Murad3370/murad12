<?php
$reward_conversion_hash = base64_encode(hash_hmac("sha1" , $reward_conversion, $secret_key, true));

?>

<html>
<head></head>

<body>
<h1>survey</h1>

</body>
<script>
const config = { // ..., alwaysReturnContent: true // ..., }
document.querySelector('body').onfocus = function () { Pollfish.hide(); Pollfish.start(pollfishConfig); };
var pollfishConfig = { api_key: "api_key_goes_here", indicator_position: "BOTTOM_RIGHT", debug: true, survey_format: 1 };
var pollfishConfig = { api_key: "api_key_goes_here", debug: true, ready: pollfishReady }; function pollfishReady(){ //Pollfish Webplugin is ready, so you can call it excplicitly using the Pollfish.showIndicator or Pollfish.showFullSurvey functions }
var pollfishConfig = { api_key: "0b133e2c-2c5b-4d23-a8b5-ff65f1f059c4", user_id: "user_id_here", indicator_position: "BOTTOM_RIGHT", debug: true, offerwall: false, request_uuid: "string_uuid", alwaysReturnContent: false, // show the iframe even when no survey is found closeCallback: customSurveyClosed, userNotEligibleCallback: customUserNotEligible, closeAndNoShowCallback: customCloseAndNoShow, surveyCompletedCallback: customSurveyFinished, surveyAvailable: customSurveyAvailable, surveyNotAvailable: customSurveyNotAvailable, rewardName: 'Diamonds', rewardConversion: '1.1', // 1 USD = 50 Diamonds, ie: if survey cpa is 30, then it will return 15 diamonds rewardConversionHash: 'C0tmcEk34otAlKcWdCiX2GC2sFg=', }; function customSurveyClosed(){ console.log("user closed the survey"); } function customUserNotEligible(){ console.log("user is not eligible"); } function customSurveyFinished(data){ console.log(` pollfish survey has finished with revenue: ${data.survey_price}, survey_loi: ${data.survey_loi}, survey_ir: ${data.survey_ir}, survey_class: ${data.survey_class}, reward_name: ${data.reward_name}, reward_value: ${data.reward_value}, `); } function customCloseAndNoShow(){ console.log("close and hide the indicator"); } function customSurveyAvailable(data){ console.log(` pollfish survey is available with revenue: ${data.revenue}, survey format playful: ${data.playful}, survey_loi: ${data.survey_loi}, survey_ir: ${data.survey_ir}, survey_class: ${data.survey_class}, reward_name: ${data.reward_name}, reward_value: ${data.reward_value}, remaining_completes: ${data.remaining_completes}, `); } function customSurveyNotAvailable(){ console.log("survey not available"); }
var pollfishConfig = { api_key: "0b133e2c-2c5b-4d23-a8b5-ff65f1f059c4", debug: true };
var pollfishConfig = { api_key: "0b133e2c-2c5b-4d23-a8b5-ff65f1f059c4", user_id: "my_user_id", indicator_position: "BOTTOM_RIGHT", debug: true, offerwall: false, request_uuid: "string_uuid" };
var pollfishConfig = { api_key: "0b133e2c-2c5b-4d23-a8b5-ff65f1f059c4", user_id: "user_id_here", indicator_position: "BOTTOM_RIGHT", debug: true, offerwall: false, request_uuid: "string_uuid", user: { gender: 0, // Zero is only used as an example, it is not a valid value for this key. Please refer to our documentation. year_of_birth: 0, marital_status: 0, parental: 0, education: 0, employment: 0, career: 0, race: 0, income: 0, }, };

</script>
<!-- Include jQuery library >= 1.4.3 version --> <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="https://storage.googleapis.com/pollfish_production/sdk/webplugin/pollfish.min.js"></script>
</html>