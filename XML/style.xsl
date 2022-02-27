<?xml version="1.0" encoding="ISO-8859-1"?>
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="2.0">
<xsl:template match="/">
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
<table>
<tr>
<th>Name</th>
<th>From</th>
<th>Weight</th>
</tr>
<xsl:for-each select="wwe/wrestler">
<tr>
<td>
<xsl:value-of select="name" />
</td>
<td>
<xsl:value-of select="from" />
</td>
<td>
<xsl:value-of select="weight" />
</td>
</tr>
</xsl:for-each>
</table>
</body>
</html>
</xsl:template>
</xsl:stylesheet>