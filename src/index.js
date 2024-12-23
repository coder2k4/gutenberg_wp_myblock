// let registerBlockType = wp.blocks.registerBlockType;
import { registerBlockType } from "@wordpress/blocks";


registerBlockType('gas/myblock', {
	edit: function () {
		return <h1 className="admin_title">Edit Title</h1>;
	},

	save: function () {
		return <h1 className="front_title">Save Title</h1>;
	},
});
