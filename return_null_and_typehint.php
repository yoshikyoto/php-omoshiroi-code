<?php

// OK --------------------------------
function returnNullWithNoTypeAnnotation() {
	return null;
}
var_dump(returnNullWithNoTypeAnnotation()); // => null


// OK --------------------------------
function noTypeNoReturn() {
}
var_dump(testNoTypeNoReturn()); // => null


// OK --------------------------------
function noTypeEmptyReturn() {
	return;
}
var_dump(noTypeEmptyReturn()); // => null

// OK ---------------------------------
function test2(): void {
}
var_dump(test2()); // => null


// OK --------------------------------
function test3(): void {
	return;
}
var_dump(test3()); // => null


// NG -------------------------------
function test4(): void {
	return null;
}
var_dump(test4()); // error!
// A void function must not return a value (did you mean "return;" instead of "return null;"?)
