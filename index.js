var registerBlockType = wp.blocks.registerBlockType;
var createElement = wp.element.createElement;

registerBlockType("blocks-course/firstblock", {
  edit: function () {
    return createElement("p", null, "Editing...");
  },
  save: function () {
       return createElement("p", null, "Saving...");
  },
});