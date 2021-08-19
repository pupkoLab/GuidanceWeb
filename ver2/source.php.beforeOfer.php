<?
print "<BR>\n";
    include ("templates/definitions.tpl");
    include ("templates/header.tpl");
    include ("templates/help.tpl"); //defines all the help boxes' text

?>

<div style="font: 900 40px/1.3 'Playfair Display', Georgia; color: #003399; text-align: center;"><b>Source Code</b></div> <br>
<font face=Verdana size=2>
<br><b>
Please note that the GUIDANCE source code is freely distributed for academic use only (see <a href="source.php#copyrights">copyrights</a> statement below)</b><br><br>
</font>
<br>
1. <a href="#download">Downloading and compiling GUIDANCE.</a><br>
2. <a href="#run">Running GUIDANCE<br></a><br>


<a NAME=download id="download"><font face=Verdana size=4><b><u>Downloading and Compiling GUIDANCE</u></b></font></a><br>

The following instructions should work right out of the box for
UNIX-like systems.  Mac should also work in principle, but is not yet
supported.  Windows will require some additional work, such as setting up a cygwin environment.<br>
<br>

1. Download the <a href="guidance.v2.01.tar.gz">GUIDANCE source code</a>. <br>
<ul><b>2015, November 24 - releasing <a href="guidance.v2.01.tar.gz">version 2.01:</a><br></b>
       Minor bugfixes</b></ul>
<ul><b>2014, September 7 - releasing <a href="guidance.v2.0.tar.gz">version 2.0:</a><br></b>
<B><font size="+1" color="red">New and improved GUIDANCE2 algorithm implemeted, see <a href="http://guidance.tau.ac.il/ver2/overview.php">overview</a> for details</B></ul></font>
<ul><b>2014, August 7 - releasing <a href="guidance.v1.5.tar.gz">version 1.5:</a><br></b>
           Other way to calculate col_col score which account for gap positions, bugfixes</b></ul>
<ul><b>2013, December 22 - releasing <a href="guidance.v1.4.1.tar.gz">version 1.4.1:</a><br></b>
           Added support for new versions of PRANK and MAFFT, bugfixes</b></ul>
<ul><b>2012, October 24 - releasing <a href="guidance.v1.3.1.tar.gz">version 1.3.1:</a><br></b>
           Minor bugfixes</b></ul>
<ul><b>2012, October 3 - releasing <a href="guidance.v1.3.tar.gz">version 1.3:</a><br></b>
           Added support for new versions of PRANK, bugfixes</b></ul>
<ul><b>2012, June 22 - releasing <a href="guidance.v1.2.tar.gz">version 1.2:</a><br></b>
           Added support for the new aligner PAGAN, parallelization, reduced running time, bugfixes</b></ul>
<ul><b>2011, May 2 - releasing <a href="guidance.v1.1.tgz">version 1.1:</a><br></b>
           Added visualization in Jalview, option for using MUSCLE, improved commandline interface, bugfixes, support more optional alignment parameters</b></ul>
2. Unzip and untar the files:<br>
<p>
<blockquote>
tar -xzvf guidance.v2.01.tar.gz
</blockquote>
</p>
This will create a directory named guidance.v2.01<br>
<br>
3. Make: <br>
<p>
<blockquote>
cd guidance.v2.01<br>
make
</blockquote>
</p>
4. Check if you have the desired alignment program(s) installed:<br>
<ul>
<li><b>MAFFT:</b> Type "mafft" and check that you have version 6.712 or newer.</li>
<ul><li>Else download and install MAFFT from:<br>
<a href="http://mafft.cbrc.jp/alignment/software/">http://mafft.cbrc.jp/alignment/software/</a></li></ul>
<li><b>PRANK:</b> Type "prank" and check that you have version v.100223 or newer.</li>
<ul><li>Else download and install PRANK from:<br>
<a href="http://www.ebi.ac.uk/goldman-srv/prank/prank/">http://www.ebi.ac.uk/goldman-srv/prank/prank/</a></li></ul>
<li><B>CLUSTALW:</B> Type "clustalw" and check that you have it insalled<br>
<ul><li>Else download and install CLUSTALW from:<br>
<a href="http://www.ebi.ac.uk/Tools/clustalw2/index.html">http://www.ebi.ac.uk/Tools/clustalw2/index.html</a></li></ul><br>
</ul>
5. GUIDANCE also uses Perl, BioPerl and Ruby:
<ul>
<li>Type "perl -v" and check that you Perl installed.</li>
<ul><li>Else download and install it from:<br>
<a href="http://www.perl.org/">http://www.perl.org/</a></li></ul>
<li>Type "perl -e 'use Bio::SeqIO'" to check that you have BioPerl.</li>
<ul><li>Else download and install it from:<br>
<a href="http://www.bioperl.org/">http://www.bioperl.org/</a></li></ul>
<li>Type "ruby --version" to check that you have ruby.</li>
<ul><li>Else download and install it from:<br>
<a href="http://www.ruby-lang.org/en/">http://www.ruby-lang.org/en/</a></li></ul>
</ul>

<br>
<b>For any problems - please <a
		href="mailto:bioSequence@tauex.tau.ac.il?subject=GUIDANCE2%20source&cc=haimash@tau.ac.il" target="_blank">contact us</a><br><br></b>


<a NAME=run id="run"><font face=Verdana size=4><b><u>Running GUIDANCE</u></b></font></a><br>
Run the Perl script: guidance/www/Guidance/guidance.pl<br>
(Note that you cannot move this script out of its directory, because it
uses relative paths to other files in other directories.  Sorry)<br>
GUIDANCE uses flags in the command line arguments: (for help, type:
"perl guidance.pl")<br>
<br>
<b>USAGE:</b> perl &#60;guidance directory&#62;/www/Guidance/guidance.pl --seqFile SEQFILE --msaProgram
[MAFFT|PRANK|CLUSTALW|MUSCLE] --seqType [aa|nuc|codon] --outDir FULL_PATH_OUTDIR<br>
<br>
<b>Required parameters:</b><br>
  <b>--seqFile:</b> Input sequence file in FASTA format<br>
  <b>--msaProgram:</b> Which MSA program to use<br>
  <b>--seqType:</b> Type of sequences for alignment (amino acids,
  nucleotides, or codons)<br>
  <b>--outDir:</b> Output directory that will be created automatically 
					and hold all output files [please provid full (and not relative) path]<br>
<br>
<b>Optional parameters:</b><br>
  <b>--program</b> [GUIDANCE2|GUIDANCE|HoT] Default=GUIDANCE2<br>
  <b>--bootstraps:</b> Number of bootstrap iterations (only for
  GUIDQANCE). Defaut=100<br>
  <b>--genCode:</b> Genetic code identifier (only for codon
  sequences). Default=1<br>
                1) Nuclear Standard<br>
                15) Nuclear Blepharisma<br>
                6)  Nuclear Ciliate<br>
                10) Nuclear Euplotid<br>
                2)  Mitochondria Vertebrate<br>
                5)  Mitochondria Invertebrate<br>
                3)  Mitochondria Yeast<br>
                13) Mitochondria Ascidian<br>
                9)  Mitochondria Echinoderm<br>
                14) Mitochondria Flatworm<br>
                4)  Mitochondria Protozoan<br>
  <b>--outOrder</b> [aligned|as_input] default=aligned<br>
  <b>--msaFile:</b> Input alignment file - not recommended, see
  the <a href="http://guidance.tau.ac.il/overview.html#InputMSA">overview</a> section<br>
  <b>--seqCutoff:</b> Confidence cutoff between 0 to 1. Default=0.6<br>
  <b>--colCutoff:</b> Confidence cutoff between 0 to 1. Default=0.93<br>
  <b>--mafft:</b> path to mafft executable. Default=mafft<br>
  <b>--prank:</b> path to prank executable. Default=prank<br>
  <b>--muscle:</b> path to muscle executable. default=muscle<br>
  <b>--pagan: </b> path to pagan executable, default=pagan<br>
  <b>--ruby:</b> path to ruby executable. default=ruby<br>
  <b>--dataset:</b> Unique name for the Dataset - will be used as prefix to outputs (default=MSA)<br>
  <b>--MSA_Param:</b> passing parameters for the alignment program e.g -F to prank.  To pass parameter containning  '-' in it, add \ before each '-' e.g. \-F for PRANK<br>
  <b>--proc_num:</b> number of processors to use (default=1)<br>
<br>
<br>
<font face="Verdana" size="3" color="red"><u><b>EXAMPLES:</b></u></font> 
				 <ul> 
				 <li><b>perl &#60;guidance directory&#62;/www/Guidance/guidance.pl --seqFile protein.fas --msaProgram MAFFT --seqType aa --outDir /somewhere/protein.guidance</b><br> 
				 - will align the amino acid sequences in the fasta file &quot;protein.fas&quot; using MAFFT and output all results to the diretory &quot;/somewhere/protein.guidance&quot; </li> 
				 <br> 
				 <li><b>perl &#60;guidance directory&#62;/www/Guidance/guidance.pl --seqFile codingSeq.fas --msaProgram PRANK --seqType codon --outDir /somewhere/codingSeq.guidance --genCode 2 --bootstraps 30</b><br> 
				 - will align the codon sequences in the fasta file &quot;codingSeq.fas&quot; using PRANK after translation using the vertebrate mitochondrial genetic code and output all results to the diretory &quot;/somewhere/codingSeq.guidance&quot;. Only 30 bootstrap iterations will be done instead of the default 100 (cut run-time by a factor of 3) </li> 
				 <br> 
				 </ul> 
<br>
<center>
<font face="Comic Sans MS" COLOR="#91219E">For any problems or questions
																																																							 please contact us at <a href="mailto:bioSequence@tauex.tau.ac.il?subject=GUIDANCE2%20source&cc=haimash@tau.ac.il" target="_blank">
bioSequence@tauex.tau.ac.il.</a><br>Enjoy!</font><br><br></center>
</font>


<hr>
<a NAME=copyrights><font face=Verdana size="4" color='red'><b><u>Copyrights:</u></b></font></a>
<ul>
<font face=Verdana size=2>
<li><b>Please note that the use of the GUIDANCE program is for academic
use only<br></b>
</font></li>
</ul></FONT>
<hr><br><br>


</table>
</body>

</html>
