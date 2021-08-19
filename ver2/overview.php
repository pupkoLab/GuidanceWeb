<?
print "<BR>\n";
    include ("templates/definitions.tpl");
    include ("templates/header.tpl");
    include ("templates/help.tpl"); //defines all the help boxes' text

?>


<title>Guidance Overview</title>

<title>Overview</title>

	<div style="font: 900 40px/1.3 'Playfair Display', Georgia; color: #003399; text-align: center;">
		<b>GUIDANCE2 Overview</b></div> <br>
<font face=Verdana size=2>
<br><br>
<ul shape="square">
<li><b><a href="#intro">Introduction</a></li>
<br><br>
<li><a href="#WhatGoodFor">What is GUIDANCE good for?</a></li>
<li><a href="#WhatNotGoodFor">What is GUIDANCE not good for?</a></li>

<BR><BR><li><a href="#input">Input</a></li>
	<ul>
		<li>Advanced options</li>
			<ul shape="square">
			<li><a href="#BootsNum">Number of bootstrap repeats</a></li>
			<li><a href="#OutputOrder">Output order</a></li>
			<li><a href="#InputMSA">Input MSA</a></li>
			<li><a href="#AdvancedMSA">Advanced MAFFT\PRANK options</a></li>
	</ul>
</ul>
<BR><BR><li><a href="#meth1">Methodolgy</a></b></li>
<ul>
	<li><a href="#GUIDANCE">What are the GUIDANCE scores?</a></li>
		<ul>
			<li>Constructing the set of MSAs</li>
			<li>Calculation of the GUIDANCE scores</li>
		</ul>
	<li><a href="#HOT">What are the HoT scores?</a></li>
<!--	<li><a href="#when">When to use each methodology?</a></li>-->
	<li><a href="#running">Running time</a></li>
</ul>
<BR><BR><li><b><a href="#output">Output</a></b><br></li>
<ul>
   <li><a href="#graphic">MSA Colored according to the confidence score<br></font></li>
   <li><a href="#MSA">MSA file<br></font></li>
   <li><a href="#ColScore">GUIDANCE column score<br></font></li>
   <li><a href="#ResScore">GUIDANCE residue score<br></font></li>
   <li><a href="#SeqScore">GUIDANCE sequence score<br></font></li>
   <li><a href="#PairScore">GUIDANCE residue-pair score<br></font></li>
   <li><a href="#Remove_COL">Remove unreliable columns below a certain cutoff<br></font></li>
   <li><a href="#Remove_Seq">Remove unreliable sequences below a certain cutoff<br></font></li>
   <li><a href="#Mask_RES">Mask specific residues below a certain
		cutoff</font> &nbsp; -- &nbsp; <font face="Comic Sans MS" size="4" COLOR="#FF0000">NEW</font></li>
</ul>
<BR><BR><li><b><a href="#simulated_benchmark">Simulated benchmark</a></b><br></li>
<br><br>
<a NAME="intro"></a>
<font face=Verdana size=3 color=#871F78><b> Introduction</b></font><br>
<font face=Verdana size=2>
Multiple sequence alignment (MSA) is a prerequisite for virtually all comparative sequence analyses, including phylogeny reconstruction, functional motif or domain characterization, sequence-based structural alignment, inference of positive selection, and profile based homology searches. All such analyses take the MSA input for granted, regardless of uncertainties in the alignment. Since errors in upstream stages tend to cascade downstream, alignment errors are an important concern in molecular data analysis.</p>
<P>The GUIDANCE web-server is a powerful and user-friendly tool for assigning a confidence score for each residue, column, and sequence in an alignment and for projecting these scores onto the MSA <a href="#REF0">[1]</A>. The server points to columns and sequences that are unreliably aligned and enables their automatic removal from the MSA, in preparation for downstream analyses.</P>
<P>Three algorithms for quantifying MSA uncertainties are implemented in the server. The GUIDANCE score is based on the robustness of the MSA to guide-tree uncertainty and relies on the bootstrap approach <a href="#REF1">[2]</A>. The Heads-or-Tails (HoT) score measures alignment uncertainty due to co-optimal solutions <a href="#REF2">[3]</A>.
GUIDANCE2 is an integrative methodology that accounts for: (1) uncertainty in the process of indel formation;
(2) uncertainty in the assumed guide tree (as GUIDANCE); (3) co-optimal solutions in the pair-wise alignments, 
used as building blocks in progressive alignment algorithms (as HoT).
</P>

<br><br>
<a NAME="WhatGoodFor"></a>
<font face=Verdana size=3 color=#871F78><b>What is GUIDANCE good for?</b></font><br>
<p><font face=Verdana size=2>GUIDANCE is meant to be used for weighting, filtering or masking unreliably aligned positions in sequence alignments before subsequent analysis. For example, align codon sequences (nucleotide sequences that code for proteins) using PAGAN, remove columns with low GUIDANCE scores, and use the remaining alignment to infer positive selection using the branch-site dN/dS test. Other analyses where GUIDANCE filtering could be useful include phylogeny reconstruction, reconstruction of the history of specific insertion and deletion events, inference of recombination events, etc.
<br> GUIADNCE2 also provides a set of alternative alignments which can be used when adopting statistical point of view, i.e. performing statistical analyses that rely on many possible alignments that
are supported by the data. 
</p>

<br><br>
<a NAME="WhatNotGoodFor"></a>
<font face=Verdana size=3 color=#871F78><b>What is GUIDANCE not good for?</b></font><br>

<p><font face=Verdana size=2>GUIDANCE cannot tell you which alignment is better. For example, align the same sequences using either PRANK or MAFFT and assign GUIDANCE scores to both. If the PRANK alignment has an average score of 0.8 while the MAFFT alignment got 1 this does not mean that the MAFFT alignment is more accurate. GUIDANCE measures the robustness of the alignment, so a perfect score means that MAFFT will always consistently aligns the sequences in the same way, regardless of perturbations in GUIDANCE. Still, this one way may be consistently wrong. So GUIDANCE cannot be used to choose between alternative alignments. It can only be used to evaluate one given alignment by a certain alignment program and identify columns where this aligner is less confident relative to other columns in the same alignment.</p>
<p><font face=Verdana size=2>GUIDANCE is also not appropriate to evaluate an alignment produced by a different approach from the ones supported in GUIDANCE (MAFFT, MUSCLE, PRANK, PAGAN and CLUSTALW). For example, you should not run GUIDANCE on an alignment produced by T-COFFEE. Also, do not upload to GUIDANCE an alignment that you corrected manually, even if it was originally produced by one of the supported aligners. Similarly, alignments that used special features (e.g. MAFFT alignment that uses RNA structure information) cannot be evaluated by GUIDANCE. In general, we recommend to always upload the sequences un-aligned and avoid using the option to upload aligned sequences.</p>
<br><br>
<a NAME="input"></a>
<font face=Verdana size=3 color=#871F78><b>Input</b></font><br>
The minimal input to the GUIDANCE server consists of:<br>
<ol>
	<li> DNA, RNA or protein sequences. The sequences should be in <A href="http://en.wikipedia.org/wiki/FASTA_format"><B>FASTA</A></B> format only. Other sequence file formats such as Clustal and Phylip may be converted to FASTA using software such as <a href="http://www-bimas.cit.nih.gov/molbio/readseq/">READSEQ</a>. The type of the sequences (nucleotides, codons, or amino-acids) should be indicated.</li>
	<li> MSA algorithm according to which the sequences will be
	aligned. The same algorithm is then used to align the sequences
	while using bootstrap trees as guide-trees (see <a
	href="#meth1">methodology</a>). The server supports three
	progressive alignment algorithms: ClustalW <A href="#REF3">[4]</a>,
	MAFFT <A href="#REF4">[4]</a>, and PRANK <A href="#REF5">[5]</a>.</li>
	<li> The preferred methodology for quantifying MSA uncertainty: GUIDANCE2, GUIDANCE or HoT. The default is GUIDANCE2, which tend to outperform other methods. <!-- but see the section <a href="#when">"when to use each methodology"</a>.--></li>
</ol>
<br><br>

<a name="advanced"></a>
<b>Advanced Options</b><br>
<ul>
	<a name="BootsNum"></a>
	<li><u>Number of bootstrap repeats (not relevant to the HoT measure)</u><br>
		The methodology is based on the bootstrap approach (see below). The higher this number is, the more accurate the confidence score is, but also the running time increases linearly. The default value is set to 100.
	</li>
	<a name="OutputOrder"></a>
	<li><u>Output order</u><br>
		This option defines the order of the sequences in the output
		alignment. Some alignment algorithms (e.g. ClustalW <A href="#REF3">[4]</a>) changes the order of the sequences. By default, the order of the sequences corresponds to their order after being aligned using the MSA algorithm. The user may choose to set the order of the sequences in the output alignment according to the input sequences file.</p>
	</li>
	<a name="InputMSA"></a>
	<li><u>Input MSA</u><br>
	The server allows users to upload their own MSA file instead of the unaligned sequence file. In this case, the input MSA is used as the base MSA and the confidence scores are calculated in the same way as usual (see <a href="#meth1">Methodology</a> below). This option should be used with caution. It is useful for analyzing an MSA of interest, for example, an MSA that was generated using a more accurate guide-tree than the standard neighbor joining tree. However, it is important to remember that even when the base MSA is given as input, the alignment algorithm chosen is applied many times in order to generate each of the perturbed MSAs. Therefore, supplying an MSA created by one program and inferring its confidence using another program may result in false predictions.</p>
	</li>
    <a name="AdvancedMSA"></a>
    <li><u>Advanced MAFFT\PRANK options</u><br>
	Advanced users can also alter the parameters passed on to the
	alignment program used. For example, by default, the server runs
	PRANK with the .+F. flag, but the experienced user may wish to
	remove that option in some cases (see <a
	href="http://www.ebi.ac.uk/goldman-srv/prank/">http://www.ebi.ac.uk/goldman-srv/prank/</a>). For MAFFT the user may enable the iterative refinement option and set the number of iterations in the MAXITERATE parameter. Additionally, an option to choose between the iterative refinement strategies genafpair, localpair, and globalair is provided when running MAFFT. See the MAFFT website for a description of these options (<A href="http://mafft.cbrc.jp/alignment/software/algorithms/algorithms.html">http://mafft.cbrc.jp/alignment/software/algorithms/algorithms.html</a>).
</li>
</ul>

<a NAME="meth1"></a>
<br><br><font face=Verdana size=3 color=#871F78><b>Methodology<br></font>
<a NAME = "GUIDANCE"></a><font face=Verdana size=2><br>What are the GUIDANCE2 and GUIDANCE scores?<br></b></font>
<p>GUIDANCE scores reflect the robustness of an alignment to perturbations.</p>
<p>For this goal, a standard MSA is first generated, hereby termed "base
MSA". The user may choose between ClustalW <A HREF="#REF3">[4]</A>,
MAFFT (the FFT-NS-1 variant) <A HREF="#REF4">[5]</a>, and PRANK <A HREF="#REF5">[6]</a>. The main idea behind the GUIDANCE2 and GUIDANCE methodologies is to construct a set of MSAs. GUIDANCE uses bootstrap trees as guide-trees to the alignment algorithm, and compare them to the base MSA in order to estimate its confidence level (Figure 1). Similarly, GUIDANCE2 uses bootstrp trees, vary the gap penalty score of the alignment program scoring scheme, and employs HoT methodology (see details below). 
Comparing the base alignment to the set of alternative alignments results in scores between 0-1 for each residue, residue-pair, column and sequence of the MSA.</p>
<p>An in-depth description of the algorithm behind GUIDANCE can be found
in ref. <A href="#Ref1">[2]</A>.</p>
<ul>

	<li><font face=Verdana size=2><b>Constructing the set of MSAs<br></b></font>
	Neighbor joining <A HREF="#REF6">[7]</a> bootstrap trees <A HREF="#REF7">[8]</a> are first constructed from the base MSA. Next, each bootstrap tree is given as an input guide tree to the alignment algorithm.</p></li>
	<li><font face=Verdana size=2><b>Calculation of the GUIDANCE scores<br></b></font>
	The method assigns a confidence score for each residue-pair in the base MSA, which is the proportion of MSAs where this pair is aligned together. The confidence score of each column/sequence is simply the average of the GUIDANCE scores over all pairs in it. The confidence score of each residue is calculated by averaging the GUIDANCE residue-pair scores over all pairs that include the residue in question.</li>
<ul><br><br>
<img src="fig_method.server-1.png" width="600"><br>
<!--<img src="fig_method.server-1.gif" width="600" height="450"><br>-->
<b>FIGURE 1</B>
A schematic flowchart of the GUIDANCE algorithm. A base MSA is produced by any progressive alignment method. Bootstrap neighbor joining (NJ) trees are reconstructed and given as guide trees to the progressive alignment program, producing a set of MSAs. GUIDANCE scores are then calculated by comparing each MSA to the base MSA, and are color coded on each residue in the alignment.</p><br>
</UL>
</UL>
<a NAME="HOT"></A><font face=Verdana size=2><br><b>What are the HoT scores?<br></b></font>
<p>HoT (Heads-or-Tails) scores measure the alignment uncertainty by
generating a set of co-optimal MSAs and comparing them to the standard
alignment. Co-optimal MSAs are a set of alignments that are given the
same maximal score by the alignment algorithm. The co-optimal MSAs set
is constructed by reversing the sequences at each of the
pairwise-profiles-alignment steps of the progressive alignment algorithm
<a href="REF2">[3]</a>. The comparison results in scores between 0-1 for each residue, residue-pair, column and sequence of the MSA.</p>

<!--
<A NAME="when"></A><font face=Verdana size=2><b>When to use each methodology?<br></b></font>
<p>Generally, we recommend using GUIDANCE scores, which were
demonstrated to be superior over HoT scores <A href="#REF1">[2]</A>. HoT
is useful for comparison, as well as for analyzing specific and rather
rare cases, in which the guide-tree is highly robust. For example,
theoretically, it is possible to have 100% bootstrap support for all
branches of the guide tree, so the GUIDANCE support will be 100% for
every alignment column, while the HoT scores can still indicate
alignment uncertainty. This is also the case when there is a single guide
tree, such as in the alignment of two or three sequences.
As a rule of thumb, we recommend to use HoT for data sets of less than 8 sequences because of the typically small number of bootstrap trees for such cases
-->
</p>
<A NAME="running"></A><font face=Verdana size=2><b>Running
time<br></b></font>
<p>Running time depends on the dataset size (number and length of
sequences) and (for GUIDANCE2 and GUIDANCE scores) on the number of bootstrap
repeats. The major component of the running time is the multiple
alignment program used, thus MAFFT runs will be fastest and PRANK runs
slowest. In Figure 2, a comparision between the running time of GUIDANCE2 and other MSA reliability methods when using MAFFT as the alignment method. 
Note that GUIDANCE2 and GUIDANCE were run
with the default 100 bootstrap repeats, but this number can be reduced
to shorten the running time. HoT running time depends on the number of
branches in the guide tree, which increases linearly with the number of
sequences. Zorro, TCS, ALiScore, TrimAl and NOISY were run on a pre-calculated MSA.
<br>Please note that that the stand-alone versions of GUIDANCE and GUIDANCE2 support parallel computing, thus
a significant reduction in running times is possible.<br>
<br><br>
<img src="fig2.png" width="500"><br>
<!--<img src="fig_method.server-1.gif" width="600" height="450"><br>-->
<b>FIGURE 2: time performance as a function of the sequence length.</B>
Sets of 40 simulated protein sequences with different lengths were aligned
using MAFFT and analyzed by alignment reliability methods.</p><br>

<A NAME="output"></A><font face=Verdana size=3 color=#871F78><b>Output</b></font><br>
<font face=Verdana size=2>
GUIDANCE directs you to a web page called "GUIDANCE Job Status
Page". This web page is automatically updated every 30 seconds, showing
messages regarding the different stages of the server activity. When the
calculation finishes, several links appear. For simplicity, we only
describe the output of the GUIDANCE method. Similar output is produced
by the HoT method, also implemented in this server. (for an example
output page click <A href="Gallery/output.php">here</A>)</p> 

<A NAME="graphic"></A><li><font face=Verdana size=2><b>MSA colored according to the confidence score</b>
This link is the main link for the GUIDANCE output, which is a projection of the confidence scores of each residue onto the MSA, using a color-scale. Shades of magenta indicate confidently aligned residues while shades of blue indicate uncertainly aligned residues. In addition, GUIDANCE column scores are plotted below the alignment.

<A NAME="MSA"></A><li><font face=Verdana size=2><b>MSA file</b><BR>
This links to a plain-text file of the base MSA, on which the colored results are being displayed.

<A NAME="ColScore"></A><li><font face=Verdana size=2><b>GUIDANCE column score</b><br>
Here you can find a table of GUIDANCE scores obtained for each column of the MSA. Note that the score of columns containing only one sequence can not be estimated and thus not presented.</p>

<A NAME="ResScore"></A><li><font face=Verdana size=2><b>GUIDANCE residue score</b><br>
Here you can find a table of GUIDANCE scores obtained for each residue in the MSA. Note that the score of residues that are aligned to gaps only can not be estimated. They are not listed in the table.</p>

<A NAME="SeqScore"></A><li><font face=Verdana size=2><b>GUIDANCE sequence score</b><br>
Here you can find a table of GUIDANCE scores obtained for each sequence
in the MSA.</p>

<A NAME="PairScore"></A><li><font face=Verdana size=2><b>GUIDANCE
residue-pair score</b><br>
Here you can find a table of GUIDANCE scores obtained for each
residue-pair in the MSA.</p>

<A NAME="Remove_COL"></A><li><font face=Verdana size=2><b>Remove unreliable
columns below a certain cutoff</b><br>
The server provides a reduced MSA by removing unreliable columns
according to this given cutoff. This MSA contains only columns with
GUIDANCE score (see <A href="#GUIDANCE">"what are the GUIDANCE scores"</a>) higher than this
cutoff, and is recommended to be used in subsequent analyses in order to
reduce errors caused by alignment errors.</p>
<P>There is no specific recommended value for this cutoff because its
effect on the alignment varies considerably among datasets. After the
GUIDANCE calculation is finished the user may select from a drop-down
list to remove unreliable columns below a certain confidence score. When
selecting a confidence score the user can see what percentage of the
original columns remain in the MSA. After choosing the appropriate
confidence level and clicking the "remove columns" button the GUIDANCE
server provides a hyperlink to a new reduced MSA comprised of the
confidently aligned columns only.</P>
<p>The default value, 0.93, was optimized for the BAliBASE benchmark
database as well as for simulation studies, and corresponds to 12% false
positive rate and 78% true positive rate. The user is allowed to change
this cutoff, to retain more\less columns. The tradeoff, as for many
other predictive tests, is between the sensitivity and specificity
levels. Using a low cutoff is recommended for applications that require
leaving as many accurate MSA columns as possible (i.e., high
sensitivity). Other applications may require the use of confident
columns only (i.e. high specificity) and thus using a high cutoff that
removes many columns from the original MSA is recommended. A table
describing the false-positive rate and the true-positive rate found in
simulation studies for different cutoffs can be found here: <A href="Table1.txt">"Table 1"</a>.</p>

<A NAME="Remove_SEQ"></A><li><font face=Verdana size=2><b>Remove
unreliable sequences below a certain cutoff</b><br>
According to this cutoff, the server enables the removal of sequences
that cause errors in the MSA because their alignment with the rest of
the sequences is unreliable.</p>
<p>The reduced MSA contains only sequences with GUIDANCE score (see <A href="#GUIDANCE">"what
are the GUIDANCE scores"</a>) higher than this cutoff and can be used for
subsequent analyses in order to reduce errors caused by alignment
errors. It is possible to change this cutoff according to the proportion
of sequences that the user wishes to retain. There is no specific
recommended value for this cutoff because its effect on the alignment
varies considerably among datasets. The web server provides a list of
cutoffs with their respective effects on the remaining proportion of
sequences and users are encouraged to experiment with several
cutoffs. We recommend running GUIDANCE again using these sequences as
input, in order to follow the improvement of the confidence level. This
can be done by simply pressing the <i><b>"run GUIDANCE on the
confidently-aligned sequences only"</i></b> button.</p>

<A NAME="Mask_RES"></A><li><font face=Verdana size=2><b>Mask specific residues below a certain cutoff</b><br>
The GUIDANCE residue scores indicate specific residues whose alignment
is unreliable (see <A href="#GUIDANCE">"what are the GUIDANCE scores"</a>).  This allows masking of specific residues instead of the
removal of whole columns or sequences.  All residues with scores lower
than the cutoff are replaced with "N" (for nucleotides) or "X" (for
amino acids). This is useful, for example, to mask codons in a codon
alignment before running a Ka/Ks analysis to look for positive selection
(see application in <A HREF="#REF8">ref. 9</a>)<br>
<br>
<!--
This option is not available in the web server. You can download this
Perl script, which takes an alignment and a file of GUIDANCE residue scores an input:<br>
Download <A href="maskLowScoreResidues.zip">maskLowScoreResidues.zip</a> and extract
the maskLowScoreResidues.pl from it (e.g. using zip or Winzip)<br>
USAGE:perl maskLowScoreResidues.pl INPUT_MSA_FILE GUIDANCE_RESIDUE_SCORES_FILE OUTPUT_MSA_FILE CUTOFF ALPHABET<br>
ALPHABET can be either aa or nuc<br>
-->
<br>
<A NAME="simulated_benchmark"></A><font face=Verdana size=3 color=#871F78><b>Simulated benchmark</b></font><br>
<font face=Verdana size=2>
Among other benchmarks used to evaluate the performance of GUIDANCE2 we used a benchmark of 541 simulated protein sequences.
Sequences were simulated using <a href="http://abacus.gene.ucl.ac.uk/software/indelible/" target="_blank">INDELible</a>.
In order to have realistic parameters for the simulations, we first selected
541 MSAs from the <a href="http://www.orthomam.univ-montp2.fr/orthomam/html/" target="_blank">OrthoMaM</a> database,
for which CDS are available for all 40 mammals included in the database.
This parameter setup resulted in MSAs similar to
OrthoMaM alignments (visual comparison of alignment length, number and
length of indels). The control files for <a href="http://abacus.gene.ucl.ac.uk/software/indelible/" target="_blank">INDELible</a> and the resulted simulated MSAs used as benchmark can be downloaded <a href="OrthoMaM_simulations.tar.gz">here</a>.</p>
<br><br><b>References<br></b>
<br><br>
<ul>
<A NAME="REF0"></A>1. Penn, O., E. Privman, H. Ashkenazy, G. Landan, D. Graur, and T. Pupko. (2010).
<b>GUIDANCE: a web server for assessing alignment confidence scores.</b>
<i>Nucleic Acids Research, 2010 Jul 1; 38 (Web Server issue):W23-W28</i>; doi: 10.1093/nar/gkq443<br>
<A NAME="REF1"></A>2. Penn, O., E. Privman, G. Landan, D. Graur, and T. Pupko. (2010).
<b>An alignment confidence score capturing robustness to guide-tree uncertainty.</b> 
<i>Molecular Biology and Evolution, 2010 Aug;27(8):1759-67</i>;
doi:10.1093/molbev/msq066 <br> 
<A NAME="REF2"></A>3. Landan, G. and D. Graur, <b>Local reliability measures from sets of co-optimal multiple sequence alignments.</b><i> Pac Symp Biocomput</i>, 2008. 13: p. 15-24.<br>
<A NAME="REF3"></A>4. Thompson, J.D., D.G. Higgins, and T.J. Gibson, <b>CLUSTAL W: improving the sensitivity of progressive multiple sequence alignment through sequence weighting, position-specific gap penalties and weight matrix choice.</b><i> Nucleic Acids Res</i>, 1994. 22(22): p. 4673-80.<br>
<A NAME="REF4"></A>5. Katoh, K., et al.,<b> MAFFT version 5: improvement in accuracy of multiple sequence alignment.</b><i> Nucleic Acids Res</i>, 2005. 33(2): p. 511-8.<br>
<A NAME="REF5"></A>6. Loytynoja, A. and N. Goldman, <b>Phylogeny-aware gap placement prevents errors in sequence alignment and evolutionary analysis.</b><i> Science</i>, 2008. 320(5883): p. 1632-5.<br>
<A NAME="REF6"></A>7. Saitou, N. and M. Nei,<b> The neighbor-joining method: a new method for reconstructing phylogenetic trees.</b><i> Mol Biol Evol</i>, 1987. 4(4): p. 406-25.<br>
<A NAME="REF7"></A>8. Felsenstein, J.,<b> Confidence limits on phylogenies: an approach using the bootstrap.</b><i> Evolution</i>, 1985. 39(4): p. 783-791.<br>
<A NAME="REF8"></A>9. Privman, E., O. Penn, and T. Pupko. <b>Improving the performance of positive
selection inference by filtering unreliable alignment regions.</b> <i>MBE</i>,
2011. doi: 10.1093/molbev/msr177.
<br>
<br>
<center><a href="#top">To the top</a>

<br><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><br><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR>
</tr>

</td>
</tr>
</table>
</body>

</html>







