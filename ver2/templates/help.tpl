<?
$helpPDB = "Each structure in the PDB is represented by a 4 character alphanumeric identifier, assigned upon its deposition.<BR> For more information check the <a href=\"http://www.rcsb.org/pdb/home/home.do\" target=\"_blank\">PDB home page</a><br> You can also use your own PDB file by using the 'Upload' option";

$helpMutations= "Mutation submission Format:<br><UL>
    <li> Submit the substitutions in the format XpositionY, where X is the wild type amino acid and Y is the mutation amino acid. \"position\" is the position in the sequence or structure depending on your input. For example V40G.<BR>
    <li> No more than 150 mutants may be submitted per run.<BR> 
    <li> Multiple substitutions should be separated by \",\"</UL>";

$helpbox3 = "ConSurf accepts external MSAs in the 7 formats supported by <a href = \"http://www.ebi.ac.uk/clustalw/\">CLUSTAL W</a>. These are: NBRF/PIR, EMBL/SwissProt, Pearson (Fasta), GDE, Clustal, GCG/MSF and RSF format. <br />In case you provide an external MSA file in Fasta format, please use the \"-\" sign as the only gap symbol, as this is the only standard gap sign that ConSurf accepts.";

$helpbox4 = "This should be the exact name of the sequence in the provided MSA file that corresponds to the query chain of the selected PDB structure. ";

$helpbox5 = "This should be the exact name of the sequence in the provided MSA file, that corresponds to the query protein.";

$treeHelp = "In case you provide an external multiple sequence alignment (MSA) file, ConSurf can also accept a corresponding external phylogenetic tree in Newick (Phylip) format, for example: <a href=\"http://bioinfo.tau.ac.il/%7Econsurf/results/GALLERY1_2vaa_A/TheTree.txt\">Tree File</a>.<br> The names of the proteins sequences in the tree file must be identical to the names in the MSA file.";

$databaseHelp = "<a href=\"http://www.expasy.ch/sprot/\">SwissProt</a> - a curated protein sequence database which strives to provide a high level of annotation<br>Clean UniProt - a modified version of the UniProt database aimed to screen the more reliable sequences.<br><a href=\"http://www.uniprot.org/help/uniref\">UniRef90</a> - database cluster sequences  and sub-fragments with 11 or more residues that have at least 90% sequence identity with each other (from any organism) into a single UniRef entry, displaying the sequence of a representative<br><a href=\"http://www.uniprot.org/help/uniprotkb\">UniProt</a> is the universal protein resource, a central repository of protein data created by combining Swiss-Prot, TrEMBL and PIR.";

$homologHelp = "The maximum number of homologues, from those found by PSI-BLAST (with the given E-value), to be included in the calculation. In order to include all the homologues, replace the default value with the word \"all\"."; 

$redundancyHelp = "Filter out redundant sequences. Sequences are clustered according to the given sequence identity cutoff, one representative of each cluster is reserved.";

$MinIdentityHelp ="Minimal sequence identity with the query sequence. Blast hits that shares less than the given identity cutoff are ignored";

$methodHelp = "The calculation method for the rate of evolution at each site in the MSA. <br />The Bayesian method was shown to significantly improve the accuracy of conservation scores estimations over the Maximum Likelihood method, in particular when a small number of sequences are used for the calculations. An additional advantage of the Bayesian method is that a confidence interval is assigned to each of the inferred evolutionary conservation score.";

$passHelp = "You will use the e-mail you gave us if you wish to view your result page in the future.<br />If you don't want others to use your e-mail to view YOUR results, we offer the use of password.";

$protein_seq_help = "If you don't know the PDB ID for your sequence, ConSurf will search the Protein Data Base for the sequence which has the highest similarity of your query sequence.";
?>