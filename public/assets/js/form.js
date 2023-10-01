//This javascript program has the back and next button functions
// sabi ni Sir Adrian Fabonan
// separate it 
// kaya ayun


function showNextSet(nextSetId) {
    // If the user selected "HINDI", directly go to "enrollmentInfo" section
    let aralStatus = document.querySelector('input[name="aralStatus"]:checked').value;

    if (aralStatus === 'HINDI') {
        nextSetId = 'enrollmentInfo';  
    } else if (aralStatus === 'OO dahil siya ay nag-DROP o huminto sa pag-aaral noong nakaraang taon') {
        nextSetId = 'returnee';
    }if (currentSetId === 'returnee') {
        nextSetId = 'enrollmentInfo';  
    } else if (currentSetId === 'enrollmentInfo') {
        nextSetId = 'householdInfo';
    } else if (currentSetId === 'householdInfo') {
        nextSetId = 'learningInfo';  
    }
    document.getElementById(nextSetId).style.display = 'block';
    // Hide the current section
    document.getElementById(currentSetId).style.display = 'none';
    currentSetId = nextSetId;
}

function showPrevSet(showPrevSetId) {
    // If the user selected "HINDI", directly go to "balikAralInfo" section
    let aralStatus = document.querySelector('input[name="aralStatus"]:checked').value;

    if (aralStatus === 'HINDI' && (currentSetId === 'enrollmentInfo')) {
        showPrevSetId = 'balikAralInfo';  
    } else if (aralStatus === 'OO dahil siya ay nag-DROP o huminto sa pag-aaral noong nakaraang taon'
        && (currentSetId === 'enrollmentInfo')) {
        showPrevSetId = 'returnee';
    } if (currentSetId === 'returnee') {
        showPrevSetId = 'balikAralInfo';  
    } 

    else if (currentSetId === 'householdInfo') {
        showPrevSetId = 'enrollmentInfo';
    } else if (currentSetId === 'learningInfo') {
        nextSetId = 'householdInfo';  
    }
    document.getElementById(showPrevSetId).style.display = 'block';
    // Hide the current section
    document.getElementById(currentSetId).style.display = 'none';
    currentSetId = showPrevSetId;
}

// Initialize currentSetId with the first section
var currentSetId = 'balikAralInfo';