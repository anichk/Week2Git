/* calcKMA.js - function used in WordPress theme flat-sky
   Ken Anich - anichk@csp.edu
   Written: July 3, 2016
   Revised: July 14, 2016 - Update 2 for GitHub
  */
// Calculate answer for calculator argument
function calcAnswer() {
	document.calculator.ans.value=eval(document.calculator.ans.value)
}