var mygallery=new fadeSlideShow({
	wrapperid: "fadeshow1", //ID of blank DIV on page to house Slideshow
	dimensions: [250, 180], //width/height of gallery in pixels. Should reflect dimensions of largest image
	imagearray: [
		["gallery_iitk/img01.jpg", "gallery.php", "", "Beautiful Peacock in Beautiful Pose"],
		["gallery_iitk/img02.jpg", "gallery.php", "", "Fountain Smiling Before PK Kelkar Library!"],
		["gallery_iitk/img03.jpg","gallery.php","","Top View of IIT Kanpur."],
		["gallery_iitk/img04.jpg", "gallery.php", "", "What a beautiful scene with everything changing colors."],
		["gallery_iitk/img05.jpg", "gallery.php", "", "My Plane is Landing Here,Plz Keep Distances."],
		["gallery_iitk/img06.jpg", "gallery.php", "", "It always remains on this land, but it lightens through the World! "],
		["gallery_iitk/img07.jpg","gallery.php","","Always Falls Still Always Aspiring"],
		["gallery_iitk/img08.jpg", "gallery.php", "", "Nuuuuuuuuuukkkkkkkkad Natika"],
		["gallery_iitk/img09.jpg", "gallery.php", "", "My Eyes Are Searching...."],
		["gallery_iitk/img10.jpg", "gallery.php", "", "I am in the Glider!"],
		["gallery_iitk/img11.jpg","gallery.php","","Koi Naa Jaane Apna Future Kya Hoga..."],
		["gallery_iitk/img12.jpg", "gallery.php", "", "I can't leave this Place"],
		["gallery_iitk/img13.jpg", "gallery.php", "", "So I am Here always."],
		["gallery_iitk/img14.jpg", "gallery.php", "", "Does people still enjoy that life?"],
		["gallery_iitk/img15.jpg","gallery.php","","Somebody goes, Somebody Not"],
		["gallery_iitk/img16.jpg", "gallery.php", "", "Volunteerly work always satisfies than paid one."]//<--no trailing comma after very last image element!
	],
	displaymode: {type:'auto', pause:2500, cycles:0, wraparound:false},
	persist: false, //remember last viewed slide and recall within same session?
	fadeduration: 400, //transition duration (milliseconds)
	descreveal: "ondemand",
	togglerid: ""
})

