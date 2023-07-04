document.addEventListener("DOMContentLoaded", function() {
  displayValues();
});

function displayValues() {
  var urlParams = new URLSearchParams(window.location.search);
  var values = JSON.parse(decodeURIComponent(urlParams.get('values')));

  for (var i = 0; i < values.length; i++) {
    var tithes = values[i].tithes;
    var welfare = values[i].welfare;
    var lovegifts = values[i].lovegifts;
    var savings = values[i].savings;
    var lovegiftSpeaker = values[i].lovegiftSpeaker;
    var food = values[i].food;
    var scholarship = values[i].scholarship;
    var worshipMinistry = values[i].worshipMinistry;
    var productionMinistry = values[i].productionMinistry;
    var danceMinistry = values[i].danceMinistry;
    var kidsMinistry = values[i].kidsMinistry;
    var missionMinistry = values[i].missionMinistry;
    var maintenanceMinistry = values[i].maintenanceMinistry;
    var usheringMinistry = values[i].usheringMinistry;
    var pastoral = values[i].pastoral;
    var finance = values[i].finance;
    var others1 = values[i].others1;
    var others2 = values[i].others2;
    var others3 = values[i].others3;
    var others4 = values[i].others4;
    var others5 = values[i].others5;
    var others6 = values[i].others6;
    var others7 = values[i].others7;
    var others8 = values[i].others8;
    var others9 = values[i].others9;
    var others10 = values[i].others10;
    var others11 = values[i].others11;
    var others12 = values[i].others12;

    if (
      tithes ||
      welfare ||
      lovegifts ||
      savings ||
      lovegiftSpeaker ||
      food ||
      scholarship ||
      worshipMinistry ||
      productionMinistry ||
      danceMinistry ||
      kidsMinistry ||
      missionMinistry ||
      maintenanceMinistry ||
      usheringMinistry ||
      pastoral ||
      finance ||
      others1 ||
      others2 ||
      others3 ||
      others4 ||
      others5 ||
      others6 ||
      others7 ||
      others8 ||
      others9 ||
      others10 ||
      others11 ||
      others12
    ) {
      document.getElementById('TithesOutput').value = tithes;
      document.getElementById('WelfareOutput').value = welfare;
      document.getElementById('LovegiftsOutput').value = lovegifts;
      document.getElementById('SavingsOutput').value = savings;
      document.getElementById('LovegiftSpeakerOutput').value = lovegiftSpeaker;
      document.getElementById('FoodOutput').value = food;
      document.getElementById('ScholarshipOutput').value = scholarship;
      document.getElementById('WorshipMinistryOutput').value = worshipMinistry;
      document.getElementById('ProductionMinistryOutput').value = productionMinistry;
      document.getElementById('DanceMinistryOutput').value = danceMinistry;
      document.getElementById('KidsMinistryOutput').value = kidsMinistry;
      document.getElementById('MissionMinistryOutput').value = missionMinistry;
      document.getElementById('MaintenanceMinistryOutput').value = maintenanceMinistry;
      document.getElementById('UsheringMinistryOutput').value = usheringMinistry;
      document.getElementById('PastoralOutput').value = pastoral;
      document.getElementById('FinanceOutput').value = finance;
      document.getElementById('Others1Output').value = others1;
      document.getElementById('Others2Output').value = others2;
      document.getElementById('Others3Output').value = others3;
      document.getElementById('Others4Output').value = others4;
      document.getElementById('Others5Output').value = others5;
      document.getElementById('Others6Output').value = others6;
      document.getElementById('Others7Output').value = others7;
      document.getElementById('Others8Output').value = others8;
      document.getElementById('Others9Output').value = others9;
      document.getElementById('Others10Output').value = others10;
      document.getElementById('Others11Output').value = others11;
      document.getElementById('Others12Output').value = others12;
    }
  }
}
