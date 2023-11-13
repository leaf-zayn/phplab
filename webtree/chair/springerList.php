<?php
/* Web Submission and Review Software
 * Written by Shai Halevi
 * This software is distributed under the terms of the open-source license
 * Common Public License (CPL) v1.0. See the terms in the file LICENSE.txt
 * in this package or at http://www.opensource.org/licenses/cpl1.0.php
 */

$html = getString();
$pos1 = strpos($html, '<p>Name and address of corresponding author:<br/>');
if ($pos1) $pos1 = strpos($html, '<u>', $pos1);
if ($pos1) $pos2 = strpos($html, '</u>', 3+$pos1);
if ($pos1 && $pos2) {
  $pos1 += 3;
  echo "Found '".substr($html, $pos1, $pos2-$pos1)."'\n";
} else echo "Not found\n";

/*
$needsAuthentication = true;
require 'header.php';

$qry = "SELECT s.subId,s.title,s.contact,a.copyright FROM {$SQLprefix}submissions s LEFT JOIN {$SQLprefix}acceptedPapers a ON a.subId=s.subId WHERE s.status='Accept'";
$res = pdo_query($qry);

print <<<EndMark
<!doctype HTML>
<html>
<head><meta charset="utf-8">
<title>Show Permissions</title>
<style type="text/css">
  td.yes {color:green;}
  td.no {color:red;}
</style>
</head>

<body>
<h1>Accpted papers and contact authors</h1>
<table>
<tbody>
<tr>
<th>subId</th><th>Title</th><th>Contact</th><th>email</th>
</tr>
EndMark;
while ($row = $res->fetch(PDO::FETCH_NUM)) {
  print "<tr><td>".$row[0]."</td><td>".substr($row[1],0,60)."</td>\n";
  $contactAuth = $row[2]
  print "<tr><td>".$row[3]."</td><td>\n";
  print "</tr>\n";
}
print <<<EndMark
</tbody>
</table>
</body>
</html>
EndMark;
*/

function getString()
{
$html=<<<EndMark
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>International Association for Cryptologic Research (IACR)</title>
<style type="text/css">
.submitButton {
    height:40px;
    font-family:verdana,arial,helvetica,sans-serif;
    font-size:16px;
    font-weight:bold;
}
</style>
</head>
<body>
<h1>International Association for Cryptologic Research (IACR)</h1>

<h2>Copyright and Consent Form</h2>

Version 2.0 - 2013 May 18

<form accept-charset="UTF-8" name="copyright" action="doCopyright.php" enctype="multipart/form-data" method="post">

<p><i>Sign <a href="#partI">Part&nbsp;I</a>, and one of 
<a href="#partII">Part&nbsp;II</a>
or <a href="#partIII">Part&nbsp;III</a>.</i></p>

<p><i>To ensure uniformity of treatment among all contributors, other 
forms may not be substituted for this form, nor may any wording of the 
form be changed or any parts be added unless explicit written permission 
is obtained from the President of the IACR for such changes. This form is 
intended for original material submitted to the IACR and must accompany any 
such material in order to be published by the IACR. Please read the form 
carefully and keep a copy for your files.</i></p>

<h3>IACR Policy on Copyrights, Publications and Presentations</h3>
<p>In connection with its publishing activities, it is the policy of the
International Association for Cryptologic Research (hereinafter referred to
as &quot;IACR&quot;) to own
the copyrights to all copyrightable material in its technical publications and
to the individual contributions contained therein, in order to promote research
in Cryptology, to protect the interests of the IACR, its authors and their
employers, and, at the same time, to facilitate the appropriate archiving and
distribution of this material by others. The IACR currently contracts with a
commercial publisher (currently: Springer-Verlag) to distribute its technical
publications throughout the world, using various means such as traditional
paper printing, Internet distribution, and computer storage media. The IACR may 
also abstract and translate its publications, or parts of them, for inclusion in 
various compendiums and similar publications, etc. When material is submitted to 
the IACR for publication, the authors implicitly consent that the IACR has the 
rights to do all of these things.</p>

<p>In addition to material in technical publications, the IACR also intends to
distribute presentation slides, videos from presentations and additional
supporting material (such as data sets and software tools). For this purpose,
the IACR requests the permission from the authors to do so in
<a href="#partI">Part&nbsp;I</a>; authors have the right to withhold this
permission.</p>

<h3>IACR Policy on Public Dissemination</h3>
<p>This policy applies to all material submitted to the IACR: The IACR must of necessity
assume that material presented at its meetings or submitted to its publications
is properly available for general dissemination to the world. It is the
responsibility of the authors, not the IACR, to determine whether disclosure of
their material requires the prior consent of other parties and, if so, to
obtain it. The authors should also guarantee that their material does not
contain libelous statements.</p>

<p>Furthermore, if authors use within their article material that has been
previously published and/or is copyrighted by another party, the IACR must
assume that permission has been obtained for such use and that any required
credit lines, copyright notices, etc., are duly noted.</p>

<h3>Availability of Material in Technical Publications</h3>
<dl>
<dt><b>Publisher version.</b></dt>
<dd>This is the definitive
version of an article that is stored by the publisher in his digital library
that is accessible to all IACR members and to paying subscribers to the library.
Four years after publication, the article will be freely available in this
library. Other versions of the article can be made available as described
below.</dd>

<dt><b>IACR version.</b></dt>
<dd> This is the version that the
authors submit to the program chair for the final version of the proceedings. The
IACR version can be made freely available on the homepages of authors, on their
employerâ€™s institutional page, and in non-commercial archival repositories such
as the <a href="http://eprint.iacr.org" target="_blank">Cryptology ePrint Archive</a>, 
<a href="http://arxiv.org/corr/home" target="_blank">ArXiv/CoRR</a>, 
<a href="http://hal.archives-ouvertes.fr/" target="_blank">HAL</a>, etc. Authors are strongly encouraged to upload the IACR version immediately in the Cryptology ePrint Archive (<a href="http://eprint.iacr.org" target="_blank">http://eprint.iacr.org</a>). This version must contain a footnote on the first page:

<blockquote>
"&copy; IACR <tt>&lt;year&gt;</tt>. This article is the final version submitted
by the author(s) to the IACR and to Springer-Verlag on <tt>&lt;date&gt;</tt>. 
The version published by Springer-Verlag is available at <tt>&lt;DOI&gt;</tt>."
</blockquote>

Here <tt>&lt;year&gt;</tt> is the year of publication, <tt>&lt;date&gt;</tt> is
the date on which the final version has been submitted to the program chair and
<tt>&lt;DOI&gt;</tt> is the
Digital Object Identifier that is assigned by the publisher (if the DOI is not
yet known, a placeholder can be inserted and updated as soon as the DOI is
available). In the case of severe formatting deviations between the IACR
version and the publisher version in the proceedings (e.g. changed page breaks
or total number of pages), the typesetting of the IACR version may be modified
to mimic the publisher version. If authors fail to upload the IACR version of 
an article to the Cryptology ePrint Archive, the IACR can do this on behalf of the
authors. Two years after publication, the IACR will make the IACR version of the
article available in the IACR Archive.</dd>

<dt><b>Subsequent revisions.</b></dt>
<dd>If authors make minor revisions (less than 25% new content) to an article,
the  IACR copyright still applies and the following copyright notice must be
inserted as a footnote on the first page:

<blockquote>"&copy; IACR <tt>&lt;year&gt;</tt>.
This article is a minor revision of the version published by
Springer-Verlag available at <tt>&lt;DOI&gt;</tt>."</blockquote>

For major revisions it is recommended that the following reference to the original
version is inserted:

<blockquote>"This article is based on an earlier article: <tt>&lt;bibliographic
data&gt;</tt>, &copy; IACR <tt>&lt;year&gt;</tt> <tt>&lt;DOI&gt;.</tt>"
</blockquote>
</dl>

<h3>IACR Obligations</h3>

<p>In exercising its rights under this agreement, the IACR will make all reasonable
efforts to act in the interests of the authors and employers as well as in its
own interest. In handling third-party republication requests for material whose
copyright is held by the IACR, the IACR requires that 1) the consent of the
first-named
author be sought as a condition in granting republication (of a complete
article) to others; and 2) the consent of the employer be obtained as a
condition in granting permission to others to reuse all or portions of an
article for promotion or marketing purposes.</p>

<h3>Author/Company Rights</h3>

<p>If an author is employed and prepared an article as a part of her/his job, the
rights to the material may rest initially with the employer. In that case, when
authors sign this form, the IACR assumes that the signing authors are authorized to 
do so by their employers and that their employers have consented to all the terms
and conditions of this form. If not, it should be signed by someone so authorized. 
(See also the Public Dissemination policy above.)</p>

<h3>Structure of this Form</h3>

<p>This form consists of three parts:
<ul type="disc">
 <li> Part&nbsp;I Consent and Release, to be completed by all authors
 <li> Part&nbsp;II Copyright, to be completed by non-government employees
 <li> Part&nbsp;III Declaration for Government Employees, to be completed by government employees
</ul></p>

<h3>Joint Authorship</h3>

<p>For jointly authored works, all the joint authors should sign, or one of the authors should sign as an authorized agent for the others.</p>

<p>In the case of multiple authorship where one or more authors are government employees but at least one author is not, the non-government author should sign Part&nbsp;II of this form.</p>


<hr/>
<h2>Copyright and Consent Form</h2>
<p>Submission-ID: 257</p>

<p>Title of article (hereinafter referred to as "the Work"):<br/>
<u>Cryptanalyses of Candidate Branching Program Obfuscators</u></p>

<p>Name of publication (i.e. conference or workshop name and year):
<u><b>Eurocrypt 2017</b></u>
</p>

<p>Author(s):<br/>
<u>Yilei Chen; Craig Gentry; Shai Halevi</u>
</p>

<p>Name and address of corresponding author:<br/>
<u>Yilei Chen, 111 Cummington Mall, RM 136, Boston, MA, 02215</u>
</p>

<a name="partI"></a>
<h3>Part&nbsp;I. Consent and Release</h3>
<p><i>To be completed by all authors. Please check all applicable boxes.</i>
You should sign your name below even if you do not check any boxes.</p>

<dl>
<dt>(YES) <b>Presentation Slides</b></dt>
<dd>The undersigned hereby grants permission for the IACR to distribute, 
publish, exhibit, broadcast, reproduce and archive, in any format or medium, 
whether now known or hereafter developed, the presentation slides used during 
the presentation of the Work at an IACR event. 
<br/><br/></dd>

<dt>(YES) <b>Oral Presentation</b></dt>
<dd>The undersigned hereby grants permission for the IACR to record, digitize, 
distribute, publish, exhibit, broadcast, reproduce and archive, in any format 
or medium, whether now known or hereafter developed, the oral presentation of 
the Work at the event. The permission granted includes the transcription and 
reproduction of the presentation for subsequent distribution and live or 
recorded broadcast of the presentation in complete or partial form during 
or after the event.
<br/><br/></dd>

<dt>(YES) <b>Auxiliary Material</b></dt>
<dd>Auxiliary Material is defined as additional files, including software 
and executables, that are not submitted for review and publication as an 
integral part of the Work, but are supplied and made available by the 
authors as useful resources for the reader.

<p>The undersigned hereby grants the IACR permission to distribute, publish, 
exhibit, broadcast, reproduce and archive any Auxiliary Material supplied 
together with the Work. The undersigned hereby represents and warrants that 
his/her Auxiliary Material contains no malicious code, virus, trojan horse 
or other software routines or hardware components designed to permit unauthorized 
access or to disable, erase or otherwise harm any computer systems or software, 
and hereby agrees to indemnify and hold harmless IACR from all liability, 
losses, damages, penalties, claims, actions, costs and expenses (including 
reasonable legal expense) arising from the use of such files.</p></dl>
<p>Signed by: <u>Yilei Chen</u>.
Today's date: <u>February 12, 2017</u></p>
<p>&nbsp;</p>

<a name="partII"></a>
<h3>PART&nbsp;II. Copyright</h3>

<p><i>To be completed by non-government employees. Government employees 
whose work is not subject to U.S. copyright should certify this by signing 
<a href="#partIII">Part&nbsp;III</a> below.</i></p>

<p>The undersigned hereby assigns all copyright rights in and to the Work 
to the IACR. The undersigned hereby represents and warrants that the Work 
has not heretofore been published in whole or in part, and that he/she is 
the author of the Work, except possibly for material such as illustrations, 
tables, animations, and text quotations that clearly identify the original 
source, with written permission notices from the copyright owners where 
required. The undersigned represents that the Work contains no libelous 
statements and does not infringe on any copyright, trademark, patent, 
statutory rights or proprietary rights of others, including rights obtained 
through licenses. The undersigned represents that he/she has the power and 
authority to make and execute this assignment.</p>

<p>In return for
these rights, the IACR recognizes the retained rights noted in Items 1, 4, 5, 7,
and 8 below, and grants to the above authors and employers for whom the Work
may have been performed a royalty-free license to use the material as noted in
Items 2, 3, 4, 5, 6, and 7. Item 9 stipulates that authors and employers must
seek permission to republish in cases not covered by Items 2, 3, 4, 5, 6, 7 and
8.</p>

<p><b>1.</b> Authors (or their employers) retain all proprietary rights 
in any process, procedure, or article of manufacture described in the Work.</p>

<p><b>2.</b> Authors may self-archive and make available the version of 
the Work submitted to the conference or workshop for the final version 
of the proceedings (the â€œIACR versionâ€), on their personal websites, on 
their employerâ€™s websites, and in non-commercial archival repositories 
subject to the restriction that it should contain at the bottom of the 
title page a footnote with the following copyright notice:</p>

<blockquote>"&copy; IACR 2013. This article is the final version submitted 
by the author(s) to the IACR and to Springer-Verlag on <tt>&lt;date&gt;</tt>
The version published by Springer-Verlag is available at 
<tt>&lt;DOI&gt;</tt>."</blockquote>

<p>In the case of severe formatting deviations between the IACR version 
and the Springer-Verlag version in the proceedings, the typesetting of 
the IACR version may be modified to mimick the Springer-Verlag version.</p>

<p><b>3.</b> Authors may self-archive and make available the subsequent 
versions of the Work with minor revisions (less than 25% new content) 
on their personal websites, on their employerâ€™s websites, and in 
non-commercial archival repositories subject to the restriction that 
they should contain at the bottom of the title page a footnote with 
the following copyright notice:</p>

<blockquote>"&copy; IACR 2013. This article is a minor revision of the version published by Springer-Verlag available at <tt>&lt;DOI&gt;</tt>."</blockquote>

<p><b>4.</b> Authors retain the right to publish substantially revised 
versions of the Work (at least 25% new content) in other venues. Such 
derived works must properly cite the original Work. It is recommend to 
insert at the bottom of the title page a footnote with the following 
copyright notice:</p>

<blockquote>"This article is based on an earlier article: <tt>&lt;bibliographic data&gt;</tt>, &copy; IACR 2013."</blockquote>

<p><b>5.</b> Authors retain the right to include parts of the Work
(e.g. illustrations) in their future work provided that the original
Work is cited properly.</p>

<p><b>6.</b>
Authors may include all or part of the Work in their dissertations or 
doctoral theses provided acknowledgement is given to the original source 
of publication and subject to the restriction that it should carry a 
prominent copyright notice to indicate that the copyright for this 
contribution is held by the IACR. This notice should contain 
"&copy; IACR 2013, <tt>&lt;DOI&gt;</tt>." and some text that describes the relation 
between the Work and the dissertation or doctoral thesis.</p>

<p><b>7.</b> Authors (or their employers) may reproduce or authorize 
others to reproduce the Work, material extracted verbatim from the Work, 
or derivative works for their personal use or for company use provided acknowledgement is given to the original source of publication, 
the IACR copyright notice is included (in the form "&copy; IACR 2013, 
<tt>&lt;DOI&gt;</tt>"), the copies are not used in any way that implies 
IACR endorsement of a product or service of an employer, and the copies themselves are not offered for sale.</p>

<p><b>8.</b> In the case of work performed under a U.S. Government 
contract or grant, the IACR recognizes that the U.S. Government has 
royalty-free permission to reproduce all or portions of the Work, 
and to authorize others to do so, for official U.S. Government 
purposes only, if the contract/grant so requires. (Appropriate 
documentation may be attached, but either Part&nbsp;II or Part&nbsp;III 
of this form must be signed.)

<p><b>9.</b> For all circumstances not covered by 
Items&nbsp;2, 3, 4, 5, 6, 7, and 8, authors (or their employers) 
must request permission from the IACR to reproduce or authorize 
the reproduction of the Work.</p>

<p>Please note that, although authors are permitted to reuse all 
or portions of their IACR-copyrighted material in other works, 
this does not include granting requests to third parties for 
reprinting, republishing, or other types of re-use. All third-party 
requests must be handled by the IACR.</p>

<p>In the event the Work is not accepted and published by the IACR 
or is withdrawn by the authors before acceptance or publication 
by the IACR, this agreement becomes null and void.</p>

<p>Signed by: <u>Yilei Chen</u> on February 12, 2017</p>
<p>&nbsp;</p>

<a name="partIII"></a>
<h3>PART&nbsp;III. Declaration for Government Employees</h3>

<p><i>To be completed only by government employees.</i></p>

<p><i>Authors who are government employees
are not required to sign Part&nbsp;II of this form. However, any coauthors 
outside the government are required to sign Part&nbsp;II of this form, 
and authors whose work was performed under a government contract or grant, 
but who are not government employees, are also required to sign Part&nbsp;II 
of this form (see Joint authorship above and item&nbsp;8 in Part&nbsp;II).</i>
</p>

<p>The undersigned hereby declares that he/she is a government employee 
and performed this work as part of his/her official duties and that the 
work is therefore not subject to national or U.S. copyright protection.</p>




</form>

<hr/>
Copyright &copy; 2013 by IACR Inc.
Permission to copy and distribute this document is hereby
granted provided that this notice is retained on all copies, that copies are
not altered, and that IACR is credited when the material is used to form other
copyright policies.

<p>This document is in part inspired by the ACM Copyright Policy Version&nbsp;7
Revised 2011 October 5.</p>
<hr/>Copyright submitted from 76.118.177.109 at 2017-02-12T18:07:07-07:00</body>
</html>
EndMark;
return $html;
}
?>
