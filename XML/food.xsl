<?xml version="1.0" encoding="ISO-8859-1"?>
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="2.0">
<xsl:template match="/">
<html>
<body>
<table>
<tr>
<th>Name of the food</th>
<th>Price</th>
<th>Description</th>
</tr>
<xsl:for-each select="recipe/food">
<tr>
<td>
<xsl:value-of select="name" />
</td>
<td>
<xsl:value-of select="price" />
</td>
<td>
<xsl:value-of select="description" />
</td>
</tr>
</xsl:for-each>
</table>
</body>
</html>
</xsl:template>
</xsl:stylesheet>
