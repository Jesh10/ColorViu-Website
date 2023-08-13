const result = document.querySelector('#result')
const severity = document.querySelector('#severity')
const statement = document.querySelector('#statement')
const explain = document.querySelector('#explain')
const redirect = document.querySelector('#redirect')

const wrongAnswers = JSON.parse(localStorage.getItem('wrong')) || []

const wrongdeu = [1, 2, 3, 4]

const deutan = wrongAnswers.filter(element => wrongdeu.includes(element))
console.log(`${deutan}`)

const wrongprotanomaly = [5, 6]

const protanomaly = wrongAnswers.filter(element => wrongprotanomaly.includes(element))
console.log(`${protanomaly}`)

const wrongprotanopia = [7, 8]

const protanopia = wrongAnswers.filter(element => wrongprotanopia.includes(element))
console.log(`${protanopia}`)

const wrongtri = [9, 10, 11, 12]

const tritan = wrongAnswers.filter(element => wrongtri.includes(element))
console.log(`${tritan}`)

if (wrongAnswers.length >= 3 ){
    
    if (tritan.length < 3 || wrongAnswers.length >= 8 && wrongAnswers.length < 12){
        result.innerHTML = "Tritanomaly"
        severity.innerHTML = "Partially Severe Color Deficiency"
        statement.innerHTML = "The results of your test has calculated that you might have the <b>Color Deficiency, Tritanomaly.</b>" 
        redirect.innerHTML = "Click the <b>'More'</b> button to find out more about <b>Tritanomaly</b>"
        localStorage.setItem('imore', "tritan") 

    } else if (tritan.length >= 3 || wrongAnswers.length >= 12){
        result.innerHTML = "Tritanopia"
        severity.innerHTML = "Severe Color Deficiency"
        statement.innerHTML = "The results of your test has calculated that you might have the <b>Color Deficiency, Tritanopia.</b>" 
        redirect.innerHTML = "Click the <b>'More'</b> button to find out more about <b>Tritanopia</b>"
        localStorage.setItem('imore', "tritan") 

    } else if (protanomaly.length > protanopia.length && protanomaly.length > deutan.length){
        result.innerHTML = "Protanomaly"
        severity.innerHTML = "Partially Severe Color Deficiency"
        statement.innerHTML = "The results of your test has calculated that you might have the <b>Color Deficiency, Protanomaly.</b>"
        redirect.innerHTML = "Click the <b>'More'</b> button to find out more about <b>Protanomaly</b>"
        localStorage.setItem('imore', "protan") 

    } else if (deutan.length < 3 && deutan.length > protanomaly.length && deutan.length > protanopia.length){
        result.innerHTML = "Deuteranomaly"
        severity.innerHTML = "Partially Severe Color Deficiency"
        statement.innerHTML = "The results of your test has calculated that you might have the <b>Color Deficiency, Deuteranomaly.</b>"
        redirect.innerHTML = "Click the <b>'More'</b> button to find out more about <b>Deuteranomaly</b>"
        localStorage.setItem('imore', "deutan")  

    } else if (deutan.length < protanopia.length && protanopia.length > protanomaly.length) {
        result.innerHTML = "Protanopia"
        severity.innerHTML = "Severe Color Deficiency"
        statement.innerHTML = "The results of your test has calculated that you might have the <b>Color Deficiency, Protanopia.</b>"
        redirect.innerHTML = "Click the <b>'More'</b> button to find out more about <b>Protanopia</b>"
        localStorage.setItem('imore', "protan") 
        
    } else if (deutan.length > protanopia.length && deutan.length > protanomaly.length && deutan.length >= 3){
        result.innerHTML = "Deuteranopia"
        severity.innerHTML = "Severe Color Deficiency"
        statement.innerHTML = "The results of your test has calculated that you might have the <b>Color Deficiency, Deuteranopia.</b>"
        redirect.innerHTML = "Click the <b>'More'</b> button to find out more about <b>Deuteranopia</b>"
        localStorage.setItem('imore', "deutan") 
    
    } 
} else {
    localStorage.setItem('imore', "normal") 
    localStorage.removeItem("wrong")
}

$r = result.innerHTML
document.cookie = "iresult=" + $r;

$s = severity.innerHTML
document.cookie = "iseverity=" + $s;