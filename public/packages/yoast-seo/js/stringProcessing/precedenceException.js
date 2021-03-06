"use strict";

var getWordIndices = require("../researches/passiveVoice/getIndicesWithRegex.js");
var precedesIndex = require("./precedesIndex");
var arrayToRegex = require("./createRegexFromArray.js");
var cannotBeBetweenAuxiliaryAndParticipleFrench = require("../researches/french/functionWords.js")().cannotBeBetweenPassiveAuxiliaryAndParticiple;
var cannotBeBetweenAuxiliaryAndParticipleEnglish = require("../researches/english/functionWords.js")().cannotBeBetweenPassiveAuxiliaryAndParticiple;
/**
 * Checks whether a word from the precedence exception list occurs anywhere in the sentence part before the participle.
 * If this is the case, the sentence part is not passive.
 *
 * @param {string} sentencePart The sentence part that contains the participle.
 * @param {number} participleIndex The index of the participle.
 *
 * @returns {boolean} Returns true if a word from the precedence exception list occurs anywhere in the
 * sentence part before the participle, otherwise returns false.
 */
module.exports = function (sentencePart, participleIndex) {
    var precedenceExceptionRegex;
    switch (this.constructor.name) {
        case "FrenchParticiple":
            precedenceExceptionRegex = arrayToRegex(cannotBeBetweenAuxiliaryAndParticipleFrench);
            break;
        case "EnglishParticiple":
        default:
            precedenceExceptionRegex = arrayToRegex(cannotBeBetweenAuxiliaryAndParticipleEnglish);
            break;
    }
    var precedenceExceptionMatch = getWordIndices(sentencePart, precedenceExceptionRegex);
    return precedesIndex(precedenceExceptionMatch, participleIndex);
};
//# sourceMappingURL=precedenceException.js.map
//# sourceMappingURL=precedenceException.js.map
