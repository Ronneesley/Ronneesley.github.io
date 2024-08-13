<?xml version="1.0" encoding="UTF-8"?>

<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

<xsl:template match="/">
  <html>
  <head>
    <style>
      div.produto {
        border: 1px solid #e2e2e2;
        float: left;
        width: 200px;
        height: 200px;
        padding: 10px;
        margin-right: 10px;
        margin-top: 10px;
      }

      div.produto:hover {
        background-color: #f4f4f4;
        cursor: hand;
      }
    </style>
  </head>

  <body>
    <h1>Meus Produtos</h1>

    <xsl:for-each select="produtos/produto">
      <div class="produto">
        <h2><xsl:value-of select="@nome"/></h2>

        <span><xsl:value-of select="@valor" /></span>
      </div>
    </xsl:for-each>    
  </body>
  </html>
</xsl:template>

</xsl:stylesheet>