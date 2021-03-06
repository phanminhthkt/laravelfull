"use strict";
/** @module stringProcessing/sanitizeString */

var stripTags = require("../stringProcessing/stripHTMLTags.js").stripFullTags;
var stripSpaces = require("../stringProcessing/stripSpaces.js");
/**
 * Strip HTMLtags characters from string that break regex
 *
 * @param {String} text The text to strip the characters from.
 * @returns {String} The text without characters.
 */
module.exports = function (text) {
  text = stripTags(text);
  text = stripSpaces(text);
  return text;
};
//# sourceMappingURL=sanitizeString.js.map
//# sourceMappingURL=sanitizeString.js.map
