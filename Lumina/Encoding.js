// Wait for the page to load
document.addEventListener("DOMContentLoaded", function() 
{
    // Get the clear button element
    var clearButton = document.getElementById("clearButton");
  
    // Add a click event listener to the clear button
    clearButton.addEventListener("click", function() 
    {
      // Stop the animation by removing the source and adding it again
      var buttonImage = document.querySelector("#clearButton img");
      var src = buttonImage.src;
      buttonImage.src = "";
      buttonImage.src = src;
  
      // Get all input fields except the ones to be excluded
      var inputFields = document.querySelectorAll("input[type='text']:not(#tithesInput1):not(#tithesInput2):not(#tithesInput3):not(#tithesInput4)");
  
      // Reset the value of each input field
      inputFields.forEach(function(input) 
      {
        input.value = "";
      });
    });
  });

  function displayValues() {
    var tithesInputValues = document.querySelectorAll('#T2Input');
    var welfareInputValues = document.querySelectorAll('#WFInput');
    var lovegiftsInputValues = document.querySelectorAll('#LSPInput');
    var savingsInputValues = document.querySelectorAll('#SInput');
    var lovegiftSpeakerInputValues = document.querySelectorAll('#LSInput');
    var foodInputValues = document.querySelectorAll('#FInput');
    var scholarshipInputValues = document.querySelectorAll('#SSInput');
    var worshipMinistryInputValues = document.querySelectorAll('#WMInput');
    var productionMinistryInputValues = document.querySelectorAll('#PMInput');
    var danceMinistryInputValues = document.querySelectorAll('#DMInput');
    var kidsMinistryInputValues = document.querySelectorAll('#KMInput');
    var missionMinistryInputValues = document.querySelectorAll('#MMInput');
    var maintenanceMinistryInputValues = document.querySelectorAll('#MTMInput');
    var usheringMinistryInputValues = document.querySelectorAll('#UMInput');
    var pastoralInputValues = document.querySelectorAll('#PTLInput');
    var financeInputValues = document.querySelectorAll('#FNInput');
    var othersInput1Value = document.getElementById('OthersInput1').value;
    var othersInput2Value = document.getElementById('OthersInput2').value;
    var othersInput3Value = document.getElementById('OthersInput3').value;
    var othersInput4Value = document.getElementById('OthersInput4').value;
    var othersInput5Value = document.getElementById('OthersInput5').value;
    var othersInput6Value = document.getElementById('OthersInput6').value;
    var othersInput7Value = document.getElementById('OthersInput7').value;
    var othersInput8Value = document.getElementById('OthersInput8').value;
    var othersInput9Value = document.getElementById('OthersInput9').value;
    var othersInput10Value = document.getElementById('OthersInput10').value;
    var othersInput11Value = document.getElementById('OthersInput11').value;
    var othersInput12Value = document.getElementById('OthersInput12').value;
  
    var values = [];
  
    for (var i = 0; i < tithesInputValues.length; i++) {
      var tithesValue = tithesInputValues[i].value;
      var welfareValue = welfareInputValues[i].value;
      var lovegiftsValue = lovegiftsInputValues[i].value;
      var savingsValue = savingsInputValues[i].value;
      var lovegiftSpeakerValue = lovegiftSpeakerInputValues[i].value;
      var foodValue = foodInputValues[i].value;
      var scholarshipValue = scholarshipInputValues[i].value;
      var worshipMinistryValue = worshipMinistryInputValues[i].value;
      var productionMinistryValue = productionMinistryInputValues[i].value;
      var danceMinistryValue = danceMinistryInputValues[i].value;
      var kidsMinistryValue = kidsMinistryInputValues[i].value;
      var missionMinistryValue = missionMinistryInputValues[i].value;
      var maintenanceMinistryValue = maintenanceMinistryInputValues[i].value;
      var usheringMinistryValue = usheringMinistryInputValues[i].value;
      var pastoralValue = pastoralInputValues[i].value;
      var financeValue = financeInputValues[i].value;
  
      var inputValues = {
        tithes: tithesValue,
        welfare: welfareValue,
        lovegifts: lovegiftsValue,
        savings: savingsValue,
        lovegiftSpeaker: lovegiftSpeakerValue,
        food: foodValue,
        scholarship: scholarshipValue,
        worshipMinistry: worshipMinistryValue,
        productionMinistry: productionMinistryValue,
        danceMinistry: danceMinistryValue,
        kidsMinistry: kidsMinistryValue,
        missionMinistry: missionMinistryValue,
        maintenanceMinistry: maintenanceMinistryValue,
        usheringMinistry: usheringMinistryValue,
        pastoral: pastoralValue,
        finance: financeValue
      };
  
      if (tithesValue || welfareValue || lovegiftsValue || savingsValue ||
          lovegiftSpeakerValue || foodValue || scholarshipValue ||
          worshipMinistryValue || productionMinistryValue || danceMinistryValue ||
          kidsMinistryValue || missionMinistryValue || maintenanceMinistryValue ||
          usheringMinistryValue || pastoralValue || financeValue) {
        values.push(inputValues);
      }
    }
  
    console.log(values);
    var queryString = 'values=' + encodeURIComponent(JSON.stringify(values));
    var url = 'Inventory.php?' + queryString;
    window.location.href = url;
  }