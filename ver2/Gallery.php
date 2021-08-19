<?
print "<BR>\n";
    include ("templates/definitions.tpl");
    include ("templates/header.tpl");
    include ("templates/help.tpl"); //defines all the help boxes' text

?>

<title>GUIDANCE Gallery</title>
<div style="font: 900 40px/1.3 'Playfair Display', Georgia; color: #003399; text-align: center;"><b>GUIDANCE2 Gallery</b></div> <br>
</font> <br>
</h1>
<br><br>
<table width=725 border=0>
<br><br>

<p align="center"><a href="http://guidance.tau.ac.il/Gallery/output.php" TARGET="_blank"><b>Click here</a> to view an example output page for an alignment of Vpu proteins.</b></p>
<br><br>
<p align='center'>Color coding scheme of GUIDANCE</P><P align="center"><img src="scale.png" width="400"></P><br><BR>
<p>Vpu is an accessory viral protein present in human immunodeficiency virus 1 (HIV-1) and simian immunodeficiency viruses (SIVs) infecting chimpanzees and other primate species, yet absent in HIV-2. The protein contains ~80 amino-acids and has two known major functions, which are conducted by two distinct domains of the protein: promotion of CD4 degradation via the cytoplasmic domain, and enhancement of virion release from host cells via the trans-membrane domain [1]. The latter activity has shown to be related to antagonism of Tetherin, an innate immune protein that blocks the release of nascent virus from infected cells in the absence of Vpu[2].</p>

<p>In order to exemplify the power and ease of GUIDANCE, the web-server was run on on a sample of Vpu protein sequences from the three main HIV-1 groups (M, N and O) and SIV sequences from chimpanzee (Pan troglodytes), gorilla (Gorilla gorilla), and several Cercopithecus species, using the MAFFT method. The results clearly show that the alignment of the cytoplasmic domain of Vpu is not robust to perturbations in the guide tree. The same applies to some residues in the transmembrane and extracellular domains (Figure 1a). Looking at specific sequences, the SIV sequences from Cercopithecus and some of the sequences from P. troglodytes are shown to be badly aligned with the rest of the sequence set.</p>

<p>Note that if those sequences are removed, the trans-membrane domain will become a confidently aligned block (Figure 1b). Subsequent analyses based on this MSA should take the alignment uncertainty into account. For example, if our goal is positive selection inference (see the <A href="http://selecton.tau.ac.il">Selecton server</A>) then predictions regarding unreliable regions such as the first or the last dozen of columns should be taken with a grain of salt.</p>

<img src="vpu.gif" width="1000">
<!--<img src="Gallery1.png" width="1000">-->
<!--<img src="image004.jpg" width="700">-->
<!--<img src="Example_MSA_GUIDANCE_OLD.gif" width="1000">-->
<!--<img src="Example_MSA_GUIDANCE.png" width="1000">-->

<p><b><u>References</b></u><br><br>
<b>1.</b>	Nomaguchi, M., M. Fujita, and A. Adachi, Role of HIV-1 Vpu protein for virus spread and pathogenesis. Microbes Infect, 2008. 10(9): p. 960-7.<br>
<b>2.</b>	Neil, S.J., T. Zang, and P.D. Bieniasz, Tetherin inhibits retrovirus release and is antagonized by HIV-1 Vpu. Nature, 2008. 451(7177): p. 425-30.</p>
