<?php
// Initialize the session
session_start();
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
if($_SERVER["REQUEST_METHOD"] == "POST"){
	//Write some post code
	echo "Sent";
	header("location: contact.php");
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>minor project</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="source/bootstrap-3.3.6-dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="source/font-awesome-4.5.0/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="style/slider.css">
	<link rel="stylesheet" type="text/css" href="style/mystyle.css">
	<link rel="stylesheet" type="text/css" href="style/contactstyle.css">
	<style>
		body{
			background-image: url("image/disprec.jpg");
		}
	</style>
</head>
<body>
	<div class="allcontain">
		<div class="header">
			<ul class="socialicon">
				<li><a href="#"><i class="fa fa-facebook"></i></a></li>
				<li><a href="#"><i class="fa fa-twitter"></i></a></li>
				<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
				<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
			</ul>
			<ul class="givusacall">
				<li>Give us a call : 0755-2744567 </li>
			</ul>
			<ul class="logreg">
				<li>Hi, <?php echo htmlspecialchars($_SESSION["username"]); ?>.</li>
				<li>|</li>
				<li><a href="logout.php">Logout</a> </li>
			</ul>
		</div>
		<!-- Navbar Up -->
		<nav class="topnavbar navbar-default topnav">
			<div class="collapse navbar-collapse" id="upmenu" >
				<ul class="nav navbar-nav" id="navbarontop">
					<li class="active"><a href="welcome.php">HOME</a></li>
					<li class="active"><a href="patient-details.php">patients information </a></li>
					<li class="active"><a href="medi.php">Get disease prediction</a></li>
				</ul>
			</div>
		</nav>
	</div>
	<div class="container">
		<h1 align="center">Predicting The Disease Of patients with size of training set: 6,019 records</h1>
		<div class="col-md-4" style="margin-top: 10px" align="center">
			<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
				<div class="form-group">
					<label for="carBrand">Select the symptom(1):</label>
					<select class="form-control" id="carBrand1" name="carBrand1">
    			<option>	feeling suicidal	</option>
<option>	suicidal	</option>
<option>	hallucinations auditory	</option>
<option>	feeling hopeless	</option>
<option>	weepiness	</option>
<option>	sleeplessness	</option>
<option>	motor retardation	</option>
<option>	irritable mood	</option>
<option>	blackout	</option>
<option>	mood depressed	</option>
<option>	hallucinations visual	</option>
<option>	worry	</option>
<option>	agitation	</option>
<option>	tremor	</option>
<option>	intoxication	</option>
<option>	verbal auditory hallucinations	</option>
<option>	energy increased	</option>
<option>	difficulty	</option>
<option>	nightmare	</option>
<option>	unable to concentrate	</option>
<option>	homelessness	</option>
<option>	thicken	</option>
<option>	tumor cell invasion	</option>
<option>	metastatic lesion	</option>
<option>	pain neck	</option>
<option>	lung nodule	</option>
<option>	pain	</option>
<option>	pain abdominal	</option>
<option>	food intolerance	</option>
<option>	mass of body structure	</option>
<option>	atypia	</option>
<option>	shortness of breath	</option>
<option>	prostatism	</option>
<option>	drowsiness	</option>
<option>	sleepy	</option>
<option>	hyponatremia	</option>
<option>	fall	</option>
<option>	unsteady gait	</option>
<option>	polyuria	</option>
<option>	hypotension	</option>
<option>	syncope	</option>
<option>	speech slurred	</option>
<option>	weight gain	</option>
<option>	asthenia	</option>
<option>	fatigue	</option>
<option>	tired	</option>
<option>	mental status changes	</option>
<option>	vomiting	</option>
<option>	numbness	</option>
<option>	hematuria	</option>
<option>	dysesthesia	</option>
<option>	polymyalgia	</option>
<option>	passed stones	</option>
<option>	pleuritic pain	</option>
<option>	guaiac positive	</option>
<option>	rale	</option>
<option>	breath sounds decreased	</option>
<option>	urge incontinence	</option>
<option>	dysuria	</option>
<option>	diarrhea	</option>
<option>	vertigo	</option>
<option>	qt interval prolonged	</option>
<option>	ataxia	</option>
<option>	paresis	</option>
<option>	hemianopsia homonymous	</option>
<option>	hemodynamically stable	</option>
<option>	rhonchus	</option>
<option>	orthostasis	</option>
<option>	decreased body weight	</option>
<option>	chill	</option>
<option>	monoclonal	</option>
<option>	ecchymosis	</option>
<option>	haemorrhage	</option>
<option>	pallor	</option>
<option>	heme positive	</option>
<option>	pain back	</option>
<option>	dizziness	</option>
<option>	arthralgia	</option>
<option>	swelling	</option>
<option>	transaminitis	</option>
<option>	nausea	</option>
<option>	cushingoid facies	</option>
<option>	cushingoid habitus	</option>
<option>	ascites	</option>
<option>	sore to touch	</option>
<option>	apyrexial	</option>
<option>	palpitation	</option>
<option>	splenomegaly	</option>
<option>	pruritus	</option>
<option>	distended abdomen	</option>
<option>	lesion	</option>
<option>	bleeding of vagina	</option>
<option>	dyspnea	</option>
<option>	cardiovascular finding	</option>
<option>	cardiovascular event	</option>
<option>	haemoptysis	</option>
<option>	cough	</option>
<option>	hypercapnia	</option>
<option>	soft tissue swelling	</option>
<option>	ambidexterity	</option>
<option>	fever	</option>
<option>	stool color yellow	</option>
<option>	rigor - temperature-associated observation	</option>
<option>	night sweat	</option>
<option>	spontaneous rupture of membranes	</option>
<option>	patient non compliance	</option>
<option>	tachypnea	</option>
<option>	productive cough	</option>
<option>	muscle hypotonia	</option>
<option>	hypotonic	</option>
<option>	has religious belief	</option>
<option>	disturbed family	</option>
<option>	behavior hyperactive	</option>
<option>	catatonia	</option>
<option>	hypersomnia	</option>
<option>	hyperhidrosis disorder	</option>
<option>	mydriasis	</option>
<option>	extrapyramidal sign	</option>
<option>	loose associations	</option>
<option>	exhaustion	</option>
<option>	unresponsiveness	</option>
<option>	hypothermia, natural	</option>
<option>	incoherent	</option>
<option>	lameness	</option>
<option>	claudication	</option>
<option>	unconscious state	</option>
<option>	clammy skin	</option>
<option>	distress respiratory	</option>
<option>	ache	</option>
<option>	macerated skin	</option>
<option>	heavy feeling	</option>
<option>	asterixis	</option>
<option>	constipation	</option>
<option>	general discomfort	</option>
<option>	urinary hesitation	</option>
<option>	dizzy spells	</option>
<option>	shooting pain	</option>
<option>	bradycardia	</option>
<option>	systolic ejection murmur	</option>
<option>	hyperemesis	</option>
<option>	polydypsia	</option>
<option>	paresthesia	</option>
<option>	titubation	</option>
<option>	dysarthria	</option>
<option>	painful swallowing	</option>
<option>	hoarseness	</option>
<option>	stridor	</option>
<option>	spasm	</option>
<option>	dysdiadochokinesia	</option>
<option>	achalasia	</option>
<option>	stiffness	</option>
<option>	side pain	</option>
<option>	emphysematous change	</option>
<option>	welt	</option>
<option>	tinnitus	</option>
<option>	hydropneumothorax	</option>
<option>	superimposition	</option>
<option>	difficulty passing urine	</option>
<option>	seizure	</option>
<option>	enuresis	</option>
<option>	lethargy	</option>
<option>	consciousness clear	</option>
<option>	muscle twitch	</option>
<option>	headache	</option>
<option>	lightheadedness	</option>
<option>	out of breath	</option>
<option>	sedentary	</option>
<option>	angina pectoris	</option>
<option>	unhappy	</option>
<option>	labored breathing	</option>
<option>	hematocrit decreased	</option>
<option>	wheezing	</option>
<option>	hypoxemia	</option>
<option>	renal angle tenderness	</option>
<option>	feels hot/feverish	</option>
<option>	general unsteadiness	</option>
<option>	facial paresis	</option>
<option>	hemiplegia	</option>
<option>	dyspnea on exertion	</option>
<option>	asymptomatic	</option>
<option>	hypokinesia	</option>
<option>	left atrial hypertrophy	</option>
<option>	cardiomegaly	</option>
<option>	chest discomfort	</option>
<option>	urgency of micturition	</option>
<option>	orthopnea	</option>
<option>	Heberden's node	</option>
<option>	jugular venous distention	</option>
<option>	sweat	</option>
<option>	sweating increased	</option>
<option>	hyperkalemia	</option>
<option>	sinus rhythm	</option>
<option>	pain chest	</option>
<option>	feeling strange	</option>
<option>	pustule	</option>
<option>	estrogen use	</option>
<option>	hypometabolism	</option>
<option>	aura	</option>
<option>	myoclonus	</option>
<option>	gurgle	</option>
<option>	wheelchair bound	</option>
<option>	yellow sputum	</option>
<option>	cachexia	</option>
<option>	myalgia	</option>
<option>	neck stiffness	</option>
<option>	hacking cough	</option>
<option>	dyspareunia	</option>
<option>	hypokalemia	</option>
<option>	poor dentition	</option>
<option>	non-productive cough	</option>
<option>	floppy	</option>
<option>	mediastinal shift	</option>
<option>	clonus	</option>
<option>	decreased translucency	</option>
<option>	extreme exhaustion	</option>
<option>	stupor	</option>
<option>	pressure chest	</option>
<option>	chest tightness	</option>
<option>	nausea and vomiting	</option>
<option>	awakening early	</option>
<option>	fatigability	</option>
<option>	tenesmus	</option>
<option>	slowing of urinary stream	</option>
<option>	monocytosis	</option>
<option>	posterior rhinorrhea	</option>
<option>	fremitus	</option>
<option>	decreased stool caliber	</option>
<option>	satiety early	</option>
<option>	hematochezia	</option>
<option>	egophony	</option>
<option>	cicatrisation	</option>
<option>	scar tissue	</option>
<option>	paraparesis	</option>
<option>	moody	</option>
<option>	fear of falling	</option>
<option>	breech presentation	</option>
<option>	cyanosis	</option>
<option>	abscess bacterial	</option>
<option>	abdomen acute	</option>
<option>	air fluid level	</option>
<option>	catching breath	</option>
<option>	abdominal tenderness	</option>
<option>	flatulence	</option>
<option>	gravida 0	</option>
<option>	throat sore	</option>
<option>	hepatosplenomegaly	</option>
<option>	snuffle	</option>
<option>	hoard	</option>
<option>	neologism	</option>
<option>	panic	</option>
<option>	lip smacking	</option>
<option>	phonophobia	</option>
<option>	rolling of eyes	</option>
<option>	hirsutism	</option>
<option>	absences finding	</option>
<option>	fecaluria	</option>
<option>	projectile vomiting	</option>
<option>	pneumatouria	</option>
<option>	cystic lesion	</option>
<option>	anorexia	</option>
<option>	hunger	</option>
<option>	nervousness	</option>
<option>	aphagia	</option>
<option>	focal seizures	</option>
<option>	abnormal sensation	</option>
<option>	Stahli's line	</option>
<option>	stinging sensation	</option>
<option>	paralyse	</option>
<option>	hot flush	</option>
<option>	redness	</option>
<option>	erythema	</option>
<option>	hypocalcemia result	</option>
<option>	oliguria	</option>
<option>	rhd positive	</option>
<option>	heartburn	</option>
<option>	heavy legs	</option>
<option>	drool	</option>
<option>	pin-point pupils	</option>
<option>	bedridden	</option>
<option>	frail	</option>
<option>	tremor resting	</option>
<option>	groggy	</option>
<option>	impaired cognition	</option>
<option>	macule	</option>
<option>	photophobia	</option>
<option>	scratch marks	</option>
<option>	sniffle	</option>
<option>	numbness of hand	</option>
<option>	bradykinesia	</option>
<option>	unwell	</option>
<option>	sensory discomfort	</option>
<option>	history of - blackout	</option>
<option>	hyperacusis	</option>
<option>	hepatomegaly	</option>
<option>	breakthrough pain	</option>
<option>	green sputum	</option>
<option>	hypoproteinemia	</option>
<option>	colic abdominal	</option>
<option>	hypertonicity	</option>
<option>	hypoalbuminemia	</option>
<option>	hypersomnolence	</option>
<option>	underweight	</option>
<option>	withdraw	</option>
<option>	terrify	</option>
<option>	decompensation	</option>
<option>	uncoordination	</option>
<option>	posturing	</option>
<option>	tonic seizures	</option>
<option>	debilitation	</option>
<option>	pain in lower limb	</option>
<option>	transsexual	</option>
<option>	nonsmoker	</option>
<option>	prostate tender	</option>
<option>	pain foot	</option>
<option>	mass in breast	</option>
<option>	snore	</option>
<option>	bruit	</option>
<option>	disequilibrium	</option>
<option>	bowel sounds decreased	</option>
<option>	burning sensation	</option>
<option>	verbally abusive behavior	</option>
<option>	adverse reaction	</option>
<option>	adverse effect	</option>
<option>	abdominal bloating	</option>
<option>	no status change	</option>
<option>	pansystolic murmur	</option>
<option>	room spinning	</option>
<option>	indifferent mood	</option>
<option>	st segment depression	</option>
<option>	t wave inverted	</option>
<option>	giddy mood	</option>
<option>	homicidal thoughts	</option>
<option>	pulsus paradoxus	</option>
<option>	gravida 10	</option>
<option>	dullness	</option>
<option>	milky	</option>
<option>	regurgitates after swallowing	</option>
<option>	vision blurred	</option>
<option>	systolic murmur	</option>
<option>	sciatica	</option>
<option>	frothy sputum	</option>
<option>	rest pain	</option>
<option>	large-for-dates fetus	</option>
<option>	para 1	</option>
<option>	immobile	</option>
<option>	malaise	</option>
<option>	moan	</option>
<option>	Murphy's sign	</option>
<option>	gasping for breath	</option>
<option>	feces in rectum	</option>
<option>	abnormally hard consistency	</option>
<option>	stuffy nose	</option>
<option>	presence of q wave	</option>
<option>	photopsia	</option>
<option>	barking cough	</option>
<option>	rapid shallow breathing	</option>
<option>	noisy respiration	</option>
<option>	nasal discharge present	</option>
<option>	symptom aggravating factors	</option>
<option>	retropulsion	</option>
<option>	formication	</option>
<option>	hypesthesia	</option>
<option>	sputum purulent	</option>
<option>	low back pain	</option>
<option>	charleyhorse	</option>
<option>	pericardial friction rub	</option>
<option>	scleral icterus	</option>
<option>	nasal flaring	</option>
<option>	sneeze	</option>
<option>	prodrome	</option>
<option>	rambling speech	</option>
<option>	clumsiness	</option>
<option>	flushing	</option>
<option>	urinoma	</option>
<option>	throbbing sensation quality	</option>
<option>	hyperventilation	</option>
<option>	excruciating pain	</option>
<option>	gag	</option>
<option>	pulse absent	</option>
<option>	flare	</option>
<option>	st segment elevation	</option>
<option>	anosmia	</option>
<option>	para 2	</option>
<option>	abortion	</option>
<option>	intermenstrual heavy bleeding	</option>
<option>	previous pregnancies 2	</option>
<option>	primigravida	</option>
<option>	proteinemia	</option>
<option>	breath-holding spell	</option>
<option>	retch	</option>
<option>	no known drug allergies	</option>
<option>	inappropriate affect	</option>
<option>	poor feeding	</option>
<option>	todd paralysis	</option>
<option>	alcoholic withdrawal symptoms	</option>
<option>	red blotches	</option>
<option>	behavior showing increased motor activity	</option>
<option>	coordination abnormal	</option>
<option>	choke	</option>
<option>	alcohol binge episode	</option>
<option>	blanch	</option>
<option>	elation	</option>
<option>	r wave feature	</option>
<option>	overweight	</option>



    		</select>
				</div>
				<div class="form-group">
					<label for="carBrand">Select the symptom(2):</label>
					<select class="form-control" id="carBrand2" name="carBrand2">
    			<option>	feeling suicidal	</option>
<option>	suicidal	</option>
<option>	hallucinations auditory	</option>
<option>	feeling hopeless	</option>
<option>	weepiness	</option>
<option>	sleeplessness	</option>
<option>	motor retardation	</option>
<option>	irritable mood	</option>
<option>	blackout	</option>
<option>	mood depressed	</option>
<option>	hallucinations visual	</option>
<option>	worry	</option>
<option>	agitation	</option>
<option>	tremor	</option>
<option>	intoxication	</option>
<option>	verbal auditory hallucinations	</option>
<option>	energy increased	</option>
<option>	difficulty	</option>
<option>	nightmare	</option>
<option>	unable to concentrate	</option>
<option>	homelessness	</option>
<option>	thicken	</option>
<option>	tumor cell invasion	</option>
<option>	metastatic lesion	</option>
<option>	pain neck	</option>
<option>	lung nodule	</option>
<option>	pain	</option>
<option>	pain abdominal	</option>
<option>	food intolerance	</option>
<option>	mass of body structure	</option>
<option>	atypia	</option>
<option>	shortness of breath	</option>
<option>	prostatism	</option>
<option>	drowsiness	</option>
<option>	sleepy	</option>
<option>	hyponatremia	</option>
<option>	fall	</option>
<option>	unsteady gait	</option>
<option>	polyuria	</option>
<option>	hypotension	</option>
<option>	syncope	</option>
<option>	speech slurred	</option>
<option>	weight gain	</option>
<option>	asthenia	</option>
<option>	fatigue	</option>
<option>	tired	</option>
<option>	mental status changes	</option>
<option>	vomiting	</option>
<option>	numbness	</option>
<option>	hematuria	</option>
<option>	dysesthesia	</option>
<option>	polymyalgia	</option>
<option>	passed stones	</option>
<option>	pleuritic pain	</option>
<option>	guaiac positive	</option>
<option>	rale	</option>
<option>	breath sounds decreased	</option>
<option>	urge incontinence	</option>
<option>	dysuria	</option>
<option>	diarrhea	</option>
<option>	vertigo	</option>
<option>	qt interval prolonged	</option>
<option>	ataxia	</option>
<option>	paresis	</option>
<option>	hemianopsia homonymous	</option>
<option>	hemodynamically stable	</option>
<option>	rhonchus	</option>
<option>	orthostasis	</option>
<option>	decreased body weight	</option>
<option>	chill	</option>
<option>	monoclonal	</option>
<option>	ecchymosis	</option>
<option>	haemorrhage	</option>
<option>	pallor	</option>
<option>	heme positive	</option>
<option>	pain back	</option>
<option>	dizziness	</option>
<option>	arthralgia	</option>
<option>	swelling	</option>
<option>	transaminitis	</option>
<option>	nausea	</option>
<option>	cushingoid facies	</option>
<option>	cushingoid habitus	</option>
<option>	ascites	</option>
<option>	sore to touch	</option>
<option>	apyrexial	</option>
<option>	palpitation	</option>
<option>	splenomegaly	</option>
<option>	pruritus	</option>
<option>	distended abdomen	</option>
<option>	lesion	</option>
<option>	bleeding of vagina	</option>
<option>	dyspnea	</option>
<option>	cardiovascular finding	</option>
<option>	cardiovascular event	</option>
<option>	haemoptysis	</option>
<option>	cough	</option>
<option>	hypercapnia	</option>
<option>	soft tissue swelling	</option>
<option>	ambidexterity	</option>
<option>	fever	</option>
<option>	stool color yellow	</option>
<option>	rigor - temperature-associated observation	</option>
<option>	night sweat	</option>
<option>	spontaneous rupture of membranes	</option>
<option>	patient non compliance	</option>
<option>	tachypnea	</option>
<option>	productive cough	</option>
<option>	muscle hypotonia	</option>
<option>	hypotonic	</option>
<option>	has religious belief	</option>
<option>	disturbed family	</option>
<option>	behavior hyperactive	</option>
<option>	catatonia	</option>
<option>	hypersomnia	</option>
<option>	hyperhidrosis disorder	</option>
<option>	mydriasis	</option>
<option>	extrapyramidal sign	</option>
<option>	loose associations	</option>
<option>	exhaustion	</option>
<option>	unresponsiveness	</option>
<option>	hypothermia, natural	</option>
<option>	incoherent	</option>
<option>	lameness	</option>
<option>	claudication	</option>
<option>	unconscious state	</option>
<option>	clammy skin	</option>
<option>	distress respiratory	</option>
<option>	ache	</option>
<option>	macerated skin	</option>
<option>	heavy feeling	</option>
<option>	asterixis	</option>
<option>	constipation	</option>
<option>	general discomfort	</option>
<option>	urinary hesitation	</option>
<option>	dizzy spells	</option>
<option>	shooting pain	</option>
<option>	bradycardia	</option>
<option>	systolic ejection murmur	</option>
<option>	hyperemesis	</option>
<option>	polydypsia	</option>
<option>	paresthesia	</option>
<option>	titubation	</option>
<option>	dysarthria	</option>
<option>	painful swallowing	</option>
<option>	hoarseness	</option>
<option>	stridor	</option>
<option>	spasm	</option>
<option>	dysdiadochokinesia	</option>
<option>	achalasia	</option>
<option>	stiffness	</option>
<option>	side pain	</option>
<option>	emphysematous change	</option>
<option>	welt	</option>
<option>	tinnitus	</option>
<option>	hydropneumothorax	</option>
<option>	superimposition	</option>
<option>	difficulty passing urine	</option>
<option>	seizure	</option>
<option>	enuresis	</option>
<option>	lethargy	</option>
<option>	consciousness clear	</option>
<option>	muscle twitch	</option>
<option>	headache	</option>
<option>	lightheadedness	</option>
<option>	out of breath	</option>
<option>	sedentary	</option>
<option>	angina pectoris	</option>
<option>	unhappy	</option>
<option>	labored breathing	</option>
<option>	hematocrit decreased	</option>
<option>	wheezing	</option>
<option>	hypoxemia	</option>
<option>	renal angle tenderness	</option>
<option>	feels hot/feverish	</option>
<option>	general unsteadiness	</option>
<option>	facial paresis	</option>
<option>	hemiplegia	</option>
<option>	dyspnea on exertion	</option>
<option>	asymptomatic	</option>
<option>	hypokinesia	</option>
<option>	left atrial hypertrophy	</option>
<option>	cardiomegaly	</option>
<option>	chest discomfort	</option>
<option>	urgency of micturition	</option>
<option>	orthopnea	</option>
<option>	Heberden's node	</option>
<option>	jugular venous distention	</option>
<option>	sweat	</option>
<option>	sweating increased	</option>
<option>	hyperkalemia	</option>
<option>	sinus rhythm	</option>
<option>	pain chest	</option>
<option>	feeling strange	</option>
<option>	pustule	</option>
<option>	estrogen use	</option>
<option>	hypometabolism	</option>
<option>	aura	</option>
<option>	myoclonus	</option>
<option>	gurgle	</option>
<option>	wheelchair bound	</option>
<option>	yellow sputum	</option>
<option>	cachexia	</option>
<option>	myalgia	</option>
<option>	neck stiffness	</option>
<option>	hacking cough	</option>
<option>	dyspareunia	</option>
<option>	hypokalemia	</option>
<option>	poor dentition	</option>
<option>	non-productive cough	</option>
<option>	floppy	</option>
<option>	mediastinal shift	</option>
<option>	clonus	</option>
<option>	decreased translucency	</option>
<option>	extreme exhaustion	</option>
<option>	stupor	</option>
<option>	pressure chest	</option>
<option>	chest tightness	</option>
<option>	nausea and vomiting	</option>
<option>	awakening early	</option>
<option>	fatigability	</option>
<option>	tenesmus	</option>
<option>	slowing of urinary stream	</option>
<option>	monocytosis	</option>
<option>	posterior rhinorrhea	</option>
<option>	fremitus	</option>
<option>	decreased stool caliber	</option>
<option>	satiety early	</option>
<option>	hematochezia	</option>
<option>	egophony	</option>
<option>	cicatrisation	</option>
<option>	scar tissue	</option>
<option>	paraparesis	</option>
<option>	moody	</option>
<option>	fear of falling	</option>
<option>	breech presentation	</option>
<option>	cyanosis	</option>
<option>	abscess bacterial	</option>
<option>	abdomen acute	</option>
<option>	air fluid level	</option>
<option>	catching breath	</option>
<option>	abdominal tenderness	</option>
<option>	flatulence	</option>
<option>	gravida 0	</option>
<option>	throat sore	</option>
<option>	hepatosplenomegaly	</option>
<option>	snuffle	</option>
<option>	hoard	</option>
<option>	neologism	</option>
<option>	panic	</option>
<option>	lip smacking	</option>
<option>	phonophobia	</option>
<option>	rolling of eyes	</option>
<option>	hirsutism	</option>
<option>	absences finding	</option>
<option>	fecaluria	</option>
<option>	projectile vomiting	</option>
<option>	pneumatouria	</option>
<option>	cystic lesion	</option>
<option>	anorexia	</option>
<option>	hunger	</option>
<option>	nervousness	</option>
<option>	aphagia	</option>
<option>	focal seizures	</option>
<option>	abnormal sensation	</option>
<option>	Stahli's line	</option>
<option>	stinging sensation	</option>
<option>	paralyse	</option>
<option>	hot flush	</option>
<option>	redness	</option>
<option>	erythema	</option>
<option>	hypocalcemia result	</option>
<option>	oliguria	</option>
<option>	rhd positive	</option>
<option>	heartburn	</option>
<option>	heavy legs	</option>
<option>	drool	</option>
<option>	pin-point pupils	</option>
<option>	bedridden	</option>
<option>	frail	</option>
<option>	tremor resting	</option>
<option>	groggy	</option>
<option>	impaired cognition	</option>
<option>	macule	</option>
<option>	photophobia	</option>
<option>	scratch marks	</option>
<option>	sniffle	</option>
<option>	numbness of hand	</option>
<option>	bradykinesia	</option>
<option>	unwell	</option>
<option>	sensory discomfort	</option>
<option>	history of - blackout	</option>
<option>	hyperacusis	</option>
<option>	hepatomegaly	</option>
<option>	breakthrough pain	</option>
<option>	green sputum	</option>
<option>	hypoproteinemia	</option>
<option>	colic abdominal	</option>
<option>	hypertonicity	</option>
<option>	hypoalbuminemia	</option>
<option>	hypersomnolence	</option>
<option>	underweight	</option>
<option>	withdraw	</option>
<option>	terrify	</option>
<option>	decompensation	</option>
<option>	uncoordination	</option>
<option>	posturing	</option>
<option>	tonic seizures	</option>
<option>	debilitation	</option>
<option>	pain in lower limb	</option>
<option>	transsexual	</option>
<option>	nonsmoker	</option>
<option>	prostate tender	</option>
<option>	pain foot	</option>
<option>	mass in breast	</option>
<option>	snore	</option>
<option>	bruit	</option>
<option>	disequilibrium	</option>
<option>	bowel sounds decreased	</option>
<option>	burning sensation	</option>
<option>	verbally abusive behavior	</option>
<option>	adverse reaction	</option>
<option>	adverse effect	</option>
<option>	abdominal bloating	</option>
<option>	no status change	</option>
<option>	pansystolic murmur	</option>
<option>	room spinning	</option>
<option>	indifferent mood	</option>
<option>	st segment depression	</option>
<option>	t wave inverted	</option>
<option>	giddy mood	</option>
<option>	homicidal thoughts	</option>
<option>	pulsus paradoxus	</option>
<option>	gravida 10	</option>
<option>	dullness	</option>
<option>	milky	</option>
<option>	regurgitates after swallowing	</option>
<option>	vision blurred	</option>
<option>	systolic murmur	</option>
<option>	sciatica	</option>
<option>	frothy sputum	</option>
<option>	rest pain	</option>
<option>	large-for-dates fetus	</option>
<option>	para 1	</option>
<option>	immobile	</option>
<option>	malaise	</option>
<option>	moan	</option>
<option>	Murphy's sign	</option>
<option>	gasping for breath	</option>
<option>	feces in rectum	</option>
<option>	abnormally hard consistency	</option>
<option>	stuffy nose	</option>
<option>	presence of q wave	</option>
<option>	photopsia	</option>
<option>	barking cough	</option>
<option>	rapid shallow breathing	</option>
<option>	noisy respiration	</option>
<option>	nasal discharge present	</option>
<option>	symptom aggravating factors	</option>
<option>	retropulsion	</option>
<option>	formication	</option>
<option>	hypesthesia	</option>
<option>	sputum purulent	</option>
<option>	low back pain	</option>
<option>	charleyhorse	</option>
<option>	pericardial friction rub	</option>
<option>	scleral icterus	</option>
<option>	nasal flaring	</option>
<option>	sneeze	</option>
<option>	prodrome	</option>
<option>	rambling speech	</option>
<option>	clumsiness	</option>
<option>	flushing	</option>
<option>	urinoma	</option>
<option>	throbbing sensation quality	</option>
<option>	hyperventilation	</option>
<option>	excruciating pain	</option>
<option>	gag	</option>
<option>	pulse absent	</option>
<option>	flare	</option>
<option>	st segment elevation	</option>
<option>	anosmia	</option>
<option>	para 2	</option>
<option>	abortion	</option>
<option>	intermenstrual heavy bleeding	</option>
<option>	previous pregnancies 2	</option>
<option>	primigravida	</option>
<option>	proteinemia	</option>
<option>	breath-holding spell	</option>
<option>	retch	</option>
<option>	no known drug allergies	</option>
<option>	inappropriate affect	</option>
<option>	poor feeding	</option>
<option>	todd paralysis	</option>
<option>	alcoholic withdrawal symptoms	</option>
<option>	red blotches	</option>
<option>	behavior showing increased motor activity	</option>
<option>	coordination abnormal	</option>
<option>	choke	</option>
<option>	alcohol binge episode	</option>
<option>	blanch	</option>
<option>	elation	</option>
<option>	r wave feature	</option>
<option>	overweight	</option>



    		</select>
				</div>
				<div class="form-group">
					<label for="carBrand">Select the symptom(3):</label>
					<select class="form-control" id="carBrand3" name="carBrand3">
    			<option>	feeling suicidal	</option>
<option>	suicidal	</option>
<option>	hallucinations auditory	</option>
<option>	feeling hopeless	</option>
<option>	weepiness	</option>
<option>	sleeplessness	</option>
<option>	motor retardation	</option>
<option>	irritable mood	</option>
<option>	blackout	</option>
<option>	mood depressed	</option>
<option>	hallucinations visual	</option>
<option>	worry	</option>
<option>	agitation	</option>
<option>	tremor	</option>
<option>	intoxication	</option>
<option>	verbal auditory hallucinations	</option>
<option>	energy increased	</option>
<option>	difficulty	</option>
<option>	nightmare	</option>
<option>	unable to concentrate	</option>
<option>	homelessness	</option>
<option>	thicken	</option>
<option>	tumor cell invasion	</option>
<option>	metastatic lesion	</option>
<option>	pain neck	</option>
<option>	lung nodule	</option>
<option>	pain	</option>
<option>	pain abdominal	</option>
<option>	food intolerance	</option>
<option>	mass of body structure	</option>
<option>	atypia	</option>
<option>	shortness of breath	</option>
<option>	prostatism	</option>
<option>	drowsiness	</option>
<option>	sleepy	</option>
<option>	hyponatremia	</option>
<option>	fall	</option>
<option>	unsteady gait	</option>
<option>	polyuria	</option>
<option>	hypotension	</option>
<option>	syncope	</option>
<option>	speech slurred	</option>
<option>	weight gain	</option>
<option>	asthenia	</option>
<option>	fatigue	</option>
<option>	tired	</option>
<option>	mental status changes	</option>
<option>	vomiting	</option>
<option>	numbness	</option>
<option>	hematuria	</option>
<option>	dysesthesia	</option>
<option>	polymyalgia	</option>
<option>	passed stones	</option>
<option>	pleuritic pain	</option>
<option>	guaiac positive	</option>
<option>	rale	</option>
<option>	breath sounds decreased	</option>
<option>	urge incontinence	</option>
<option>	dysuria	</option>
<option>	diarrhea	</option>
<option>	vertigo	</option>
<option>	qt interval prolonged	</option>
<option>	ataxia	</option>
<option>	paresis	</option>
<option>	hemianopsia homonymous	</option>
<option>	hemodynamically stable	</option>
<option>	rhonchus	</option>
<option>	orthostasis	</option>
<option>	decreased body weight	</option>
<option>	chill	</option>
<option>	monoclonal	</option>
<option>	ecchymosis	</option>
<option>	haemorrhage	</option>
<option>	pallor	</option>
<option>	heme positive	</option>
<option>	pain back	</option>
<option>	dizziness	</option>
<option>	arthralgia	</option>
<option>	swelling	</option>
<option>	transaminitis	</option>
<option>	nausea	</option>
<option>	cushingoid facies	</option>
<option>	cushingoid habitus	</option>
<option>	ascites	</option>
<option>	sore to touch	</option>
<option>	apyrexial	</option>
<option>	palpitation	</option>
<option>	splenomegaly	</option>
<option>	pruritus	</option>
<option>	distended abdomen	</option>
<option>	lesion	</option>
<option>	bleeding of vagina	</option>
<option>	dyspnea	</option>
<option>	cardiovascular finding	</option>
<option>	cardiovascular event	</option>
<option>	haemoptysis	</option>
<option>	cough	</option>
<option>	hypercapnia	</option>
<option>	soft tissue swelling	</option>
<option>	ambidexterity	</option>
<option>	fever	</option>
<option>	stool color yellow	</option>
<option>	rigor - temperature-associated observation	</option>
<option>	night sweat	</option>
<option>	spontaneous rupture of membranes	</option>
<option>	patient non compliance	</option>
<option>	tachypnea	</option>
<option>	productive cough	</option>
<option>	muscle hypotonia	</option>
<option>	hypotonic	</option>
<option>	has religious belief	</option>
<option>	disturbed family	</option>
<option>	behavior hyperactive	</option>
<option>	catatonia	</option>
<option>	hypersomnia	</option>
<option>	hyperhidrosis disorder	</option>
<option>	mydriasis	</option>
<option>	extrapyramidal sign	</option>
<option>	loose associations	</option>
<option>	exhaustion	</option>
<option>	unresponsiveness	</option>
<option>	hypothermia, natural	</option>
<option>	incoherent	</option>
<option>	lameness	</option>
<option>	claudication	</option>
<option>	unconscious state	</option>
<option>	clammy skin	</option>
<option>	distress respiratory	</option>
<option>	ache	</option>
<option>	macerated skin	</option>
<option>	heavy feeling	</option>
<option>	asterixis	</option>
<option>	constipation	</option>
<option>	general discomfort	</option>
<option>	urinary hesitation	</option>
<option>	dizzy spells	</option>
<option>	shooting pain	</option>
<option>	bradycardia	</option>
<option>	systolic ejection murmur	</option>
<option>	hyperemesis	</option>
<option>	polydypsia	</option>
<option>	paresthesia	</option>
<option>	titubation	</option>
<option>	dysarthria	</option>
<option>	painful swallowing	</option>
<option>	hoarseness	</option>
<option>	stridor	</option>
<option>	spasm	</option>
<option>	dysdiadochokinesia	</option>
<option>	achalasia	</option>
<option>	stiffness	</option>
<option>	side pain	</option>
<option>	emphysematous change	</option>
<option>	welt	</option>
<option>	tinnitus	</option>
<option>	hydropneumothorax	</option>
<option>	superimposition	</option>
<option>	difficulty passing urine	</option>
<option>	seizure	</option>
<option>	enuresis	</option>
<option>	lethargy	</option>
<option>	consciousness clear	</option>
<option>	muscle twitch	</option>
<option>	headache	</option>
<option>	lightheadedness	</option>
<option>	out of breath	</option>
<option>	sedentary	</option>
<option>	angina pectoris	</option>
<option>	unhappy	</option>
<option>	labored breathing	</option>
<option>	hematocrit decreased	</option>
<option>	wheezing	</option>
<option>	hypoxemia	</option>
<option>	renal angle tenderness	</option>
<option>	feels hot/feverish	</option>
<option>	general unsteadiness	</option>
<option>	facial paresis	</option>
<option>	hemiplegia	</option>
<option>	dyspnea on exertion	</option>
<option>	asymptomatic	</option>
<option>	hypokinesia	</option>
<option>	left atrial hypertrophy	</option>
<option>	cardiomegaly	</option>
<option>	chest discomfort	</option>
<option>	urgency of micturition	</option>
<option>	orthopnea	</option>
<option>	Heberden's node	</option>
<option>	jugular venous distention	</option>
<option>	sweat	</option>
<option>	sweating increased	</option>
<option>	hyperkalemia	</option>
<option>	sinus rhythm	</option>
<option>	pain chest	</option>
<option>	feeling strange	</option>
<option>	pustule	</option>
<option>	estrogen use	</option>
<option>	hypometabolism	</option>
<option>	aura	</option>
<option>	myoclonus	</option>
<option>	gurgle	</option>
<option>	wheelchair bound	</option>
<option>	yellow sputum	</option>
<option>	cachexia	</option>
<option>	myalgia	</option>
<option>	neck stiffness	</option>
<option>	hacking cough	</option>
<option>	dyspareunia	</option>
<option>	hypokalemia	</option>
<option>	poor dentition	</option>
<option>	non-productive cough	</option>
<option>	floppy	</option>
<option>	mediastinal shift	</option>
<option>	clonus	</option>
<option>	decreased translucency	</option>
<option>	extreme exhaustion	</option>
<option>	stupor	</option>
<option>	pressure chest	</option>
<option>	chest tightness	</option>
<option>	nausea and vomiting	</option>
<option>	awakening early	</option>
<option>	fatigability	</option>
<option>	tenesmus	</option>
<option>	slowing of urinary stream	</option>
<option>	monocytosis	</option>
<option>	posterior rhinorrhea	</option>
<option>	fremitus	</option>
<option>	decreased stool caliber	</option>
<option>	satiety early	</option>
<option>	hematochezia	</option>
<option>	egophony	</option>
<option>	cicatrisation	</option>
<option>	scar tissue	</option>
<option>	paraparesis	</option>
<option>	moody	</option>
<option>	fear of falling	</option>
<option>	breech presentation	</option>
<option>	cyanosis	</option>
<option>	abscess bacterial	</option>
<option>	abdomen acute	</option>
<option>	air fluid level	</option>
<option>	catching breath	</option>
<option>	abdominal tenderness	</option>
<option>	flatulence	</option>
<option>	gravida 0	</option>
<option>	throat sore	</option>
<option>	hepatosplenomegaly	</option>
<option>	snuffle	</option>
<option>	hoard	</option>
<option>	neologism	</option>
<option>	panic	</option>
<option>	lip smacking	</option>
<option>	phonophobia	</option>
<option>	rolling of eyes	</option>
<option>	hirsutism	</option>
<option>	absences finding	</option>
<option>	fecaluria	</option>
<option>	projectile vomiting	</option>
<option>	pneumatouria	</option>
<option>	cystic lesion	</option>
<option>	anorexia	</option>
<option>	hunger	</option>
<option>	nervousness	</option>
<option>	aphagia	</option>
<option>	focal seizures	</option>
<option>	abnormal sensation	</option>
<option>	Stahli's line	</option>
<option>	stinging sensation	</option>
<option>	paralyse	</option>
<option>	hot flush	</option>
<option>	redness	</option>
<option>	erythema	</option>
<option>	hypocalcemia result	</option>
<option>	oliguria	</option>
<option>	rhd positive	</option>
<option>	heartburn	</option>
<option>	heavy legs	</option>
<option>	drool	</option>
<option>	pin-point pupils	</option>
<option>	bedridden	</option>
<option>	frail	</option>
<option>	tremor resting	</option>
<option>	groggy	</option>
<option>	impaired cognition	</option>
<option>	macule	</option>
<option>	photophobia	</option>
<option>	scratch marks	</option>
<option>	sniffle	</option>
<option>	numbness of hand	</option>
<option>	bradykinesia	</option>
<option>	unwell	</option>
<option>	sensory discomfort	</option>
<option>	history of - blackout	</option>
<option>	hyperacusis	</option>
<option>	hepatomegaly	</option>
<option>	breakthrough pain	</option>
<option>	green sputum	</option>
<option>	hypoproteinemia	</option>
<option>	colic abdominal	</option>
<option>	hypertonicity	</option>
<option>	hypoalbuminemia	</option>
<option>	hypersomnolence	</option>
<option>	underweight	</option>
<option>	withdraw	</option>
<option>	terrify	</option>
<option>	decompensation	</option>
<option>	uncoordination	</option>
<option>	posturing	</option>
<option>	tonic seizures	</option>
<option>	debilitation	</option>
<option>	pain in lower limb	</option>
<option>	transsexual	</option>
<option>	nonsmoker	</option>
<option>	prostate tender	</option>
<option>	pain foot	</option>
<option>	mass in breast	</option>
<option>	snore	</option>
<option>	bruit	</option>
<option>	disequilibrium	</option>
<option>	bowel sounds decreased	</option>
<option>	burning sensation	</option>
<option>	verbally abusive behavior	</option>
<option>	adverse reaction	</option>
<option>	adverse effect	</option>
<option>	abdominal bloating	</option>
<option>	no status change	</option>
<option>	pansystolic murmur	</option>
<option>	room spinning	</option>
<option>	indifferent mood	</option>
<option>	st segment depression	</option>
<option>	t wave inverted	</option>
<option>	giddy mood	</option>
<option>	homicidal thoughts	</option>
<option>	pulsus paradoxus	</option>
<option>	gravida 10	</option>
<option>	dullness	</option>
<option>	milky	</option>
<option>	regurgitates after swallowing	</option>
<option>	vision blurred	</option>
<option>	systolic murmur	</option>
<option>	sciatica	</option>
<option>	frothy sputum	</option>
<option>	rest pain	</option>
<option>	large-for-dates fetus	</option>
<option>	para 1	</option>
<option>	immobile	</option>
<option>	malaise	</option>
<option>	moan	</option>
<option>	Murphy's sign	</option>
<option>	gasping for breath	</option>
<option>	feces in rectum	</option>
<option>	abnormally hard consistency	</option>
<option>	stuffy nose	</option>
<option>	presence of q wave	</option>
<option>	photopsia	</option>
<option>	barking cough	</option>
<option>	rapid shallow breathing	</option>
<option>	noisy respiration	</option>
<option>	nasal discharge present	</option>
<option>	symptom aggravating factors	</option>
<option>	retropulsion	</option>
<option>	formication	</option>
<option>	hypesthesia	</option>
<option>	sputum purulent	</option>
<option>	low back pain	</option>
<option>	charleyhorse	</option>
<option>	pericardial friction rub	</option>
<option>	scleral icterus	</option>
<option>	nasal flaring	</option>
<option>	sneeze	</option>
<option>	prodrome	</option>
<option>	rambling speech	</option>
<option>	clumsiness	</option>
<option>	flushing	</option>
<option>	urinoma	</option>
<option>	throbbing sensation quality	</option>
<option>	hyperventilation	</option>
<option>	excruciating pain	</option>
<option>	gag	</option>
<option>	pulse absent	</option>
<option>	flare	</option>
<option>	st segment elevation	</option>
<option>	anosmia	</option>
<option>	para 2	</option>
<option>	abortion	</option>
<option>	intermenstrual heavy bleeding	</option>
<option>	previous pregnancies 2	</option>
<option>	primigravida	</option>
<option>	proteinemia	</option>
<option>		</option>



    		</select>
				</div>
				<button type="submit" class="btn btn-primary">predict</button>
			</form>
		</div>
	</div>
</body>
</html>