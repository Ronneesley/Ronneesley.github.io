<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:template match="/">
<html> 
<head>
    <style>
        h3 {
            font-weight: normal;
            margin-left: 10px;
        }
    </style>
</head>
<body>
    <h1>Frameworks</h1>

    <xsl:for-each select="frameworks/linguagem">
        <h2><xsl:value-of select="@nome"/></h2>

        <xsl:for-each select="framework">
            <h3><xsl:value-of select="@nome"/></h3>

            URL: 
            <a href="#">
                <xsl:value-of select="@url"/>
            </a>
            <br />

            Versão: <xsl:value-of select="@versao"/>

            <table border="1">
                <thead>
                    <tr>
                        <th>Critério</th>
                        <th>Avaliação</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>Visual do site</td>
                        <td>
                            <xsl:value-of select="avaliacao/@visualsite"/>
                        </td>
                    </tr>

                    <tr>
                        <td>Qualidade da documentação</td>
                        <td>
                            <xsl:value-of select="avaliacao/@qualidadedocumentacao"/>
                        </td>
                    </tr>

                    <tr>
                        <td>Funcionou</td>
                        <td>
                            <xsl:value-of select="avaliacao/@funcionou"/>
                        </td>
                    </tr>

                    <tr>
                        <td>Observação</td>
                        <td>
                            <xsl:value-of select="avaliacao/observacao"/>
                        </td>
                    </tr>
                </tbody>
            </table>
        </xsl:for-each>
    </xsl:for-each>
</body>
</html>

</xsl:template>
</xsl:stylesheet>
