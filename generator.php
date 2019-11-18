
<?php


/*
*Plugin name: Random disturbing facts generator
*Author: Gabe, Dori
*Version: 0.1
*/

function random_get_fact() {

$facts = 

"There are over 200 corpses on Mount Everest and they are used as waypoints for climbers.
As recently as the 1980s, many researchers and doctors believed that babies couldn't feel pain, so some were operated on without any anesthesia.
All cruise ships have a functioning morgue on board.
There are colors that humans can't see, and you can't even try to imagine what they look like.
Less than 5% of the oceans have been explored by humans, meaning we have nooooo idea what kinda monsters could be living there.
The average person walks by almost 16 murderers in their lifetime.
There are things called eyelash mites that live on people's faces, and you probably have them.
Male echidnas have four-headed penises.
Even if your lungs filled up with the same amount of liquid, it could take an extra 10 minutes for you to drown in saltwater than it would in freshwater.
Serial killer Joe Metheny owned a food stand and sold burgers that combined animal meat with the flesh of his victims to unsuspecting customers.
There are more ways to shuffle a standard deck of cards than there are atoms on Earth.
As a result, every time you shuffle a deck of cards, you're probably the first person in history to shuffle them in that sequence.
You're 6.7% more likely to die on your birthday than any other day of the year.
Ted Bundy was a serial killer who also worked at a suicide hotline. A coworker once said, Ted Bundy took lives, but also saved lives.
The Japanese giant hornet has venom that's so powerful, it can dissolve human tissue.
Violet Jessop, aka Miss Unsinkable, survived the sinking of the Titanic, a collision on the RMS Olympic, and the sinking of the Britannic.
Male ducks have corkscrew-shaped penises, and some even have barbs at the end to scrub away leftover sperm in the female from rival males.
Arsenic was used to dye clothes green in the 19th century, but Victorian Britain didn't know it was poisonous, so several people died.
In the Victorian Era, it was common to take pictures with the bodies of a deceased family member, as a final way to preserve their memory.
In 1978 in the midst of his murder spree, serial killer Rodney Alcala won an episode of The Dating Game. The woman who picked him refused to go on the date because he seemed creepy.
The first person to die while building the Hoover Dam was John Gregory Tierney, and the last was Patrick William Tierney, his son, exactly 14 years later.
Astronaut Michael Collins took a picture of Neil Armstrong and Buzz Aldrin in the Lunar Module, with Earth in the background, meaning he took a picture of every human who ever lived, except for himself.
Babies are born with about 300 bones, but as they get older those bones fuse together to form 206 bones.
In the 16th and 17th centuries, many Europeans thought that eating human bones, blood, and fat would cure certain illnesses, so they stole mummies from Egyptian tombs and robbed graves to get the bodies.
And people jerk themselves awake while sleeping because their body thinks they're dead – it's their brain's way of making sure they're still alive, since their heart rate is so slow.
Rabbits will eat their own young if they’re stressed enough.
Your skeleton is wet.
It takes longer to say WWW then it does to say World Wide Web.
In toddlers, their adult teeth are right underneath their eyes.
No one knows how anesthetics work. Any time they put you 'under' for a routine operation, there's currently no scientific explanation for why you're unconscious.
The TSA didn’t catch 95% of guns and other paraphernalia going through airports during a government-run experiment.
The picture for your funeral program may have already been taken.
Barcode scanners scan the white parts, not the black.
Dogs like squeaky toys because it reminds them of a small animal being killed.
You don't know if there is a secret everybody knows except you.
Genghis Khan killed so many people in his wake that the farmlands they had used returned to being forest. He did this at such a scale that it actually significantly reduced carbon in the atmosphere.
The FDA allows small amounts of rat droppings in candy bars.
Turritopsis dohrnii, aka the immortal jellyfish, is a species that ages in reverse and then restarts its life cycle over...forever.
If you live to become the oldest person alive, the entire human population has been replaced in your lifetime. Except you.
Butterflies have been known to drink blood.
Thanks to pregnancy, the average number of skeletons in a human body is greater than one.
Cannibalism is pretty damn common in hamsters.
People who freeze to death are sometimes found naked because, as they near dangerously low body heat, they get the sensation they are burning hot.
Your belly button is just your old mouth.
You pass the anniversary of your death every year.
Moths will vibrate their genitals as a way to prevent a bat from locating them.
There might be fecal matter on your office coffee mug
A chicken once survived for 18 months without a head
There’s a type of predatory fish that can walk on land
You shed about a pound and a half of skin a year
Peanut butter can contain rat hairs
There’s a species of lizard that shoots blood from its eyes
Parts of Albert Einstein’s brain are on display in a museum
Horses can’t vomit
In seven hours, an elephant produces enough poop to outweigh an adult human
There used to be real human remains in Disneyland’s Pirates of the Caribbean ride
A Rat King is a phenomenon created when a large group of rats become fused together by their tails via ice, dirt, hair, blood, or even feces. Encounters with this horrible phenomenon inspired some of humanity’s greatest myths.
Watch out the next time you go for a picnic. The Japanese giant hornet’s venom is so powerful that it can actually dissolve human flesh.
Did you know that you can actually get chlamydia from a koala? Not so cuddly now, are they?
Have you ever had a nightmare where you can’t move or speak but you’re still completely conscious? Turns out it can happen in real life and it’s called locked-in syndrome.
Hinterkaifeck was a small German farm a bit north of Munich. One night in 1922, all six inhabitants of the farm were murdered with a mattock. The crime as never solved, but there are many theories.
";
   
$facts = explode( "\n", $facts );

return wptexturize( $facts[ mt_rand( 0, count( $facts ) - 1 ) ] );

$factText = $fact['text'];

}

if (!function_exists('add_action')) {
	echo 'k bye';
	exit;
}


function random_fact() {
	$chosen = random_get_fact();
	echo "<p id='bd'>$chosen</p>";
}

add_action( 'admin_notices', 'random_fact' );

function facte_css() {
	$x = is_rtl() ? 'left' : 'right';

	echo "
	<style type='text/css'>
	#facte {
		float: $x;
		padding-$x: 5px;
		padding-top: 3px;		
		margin: 0;
		font-size: 14px;
	}
	</style>
	";
}

add_action( 'admin_head', 'facte_css' );

esc_html_e( 'Hello World', 'text_domain' );