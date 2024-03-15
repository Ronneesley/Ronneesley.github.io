from bs4 import BeautifulSoup
import urllib.request

url = "https://www.crummy.com/software/BeautifulSoup/bs4/doc/"

req = urllib.request.Request(url)
req.add_header('origin', 'https://revistagalileu.globo.com/')
req.add_header('Referer', 'https://revistagalileu.globo.com/')
req.add_header('user-agent', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36')

response = urllib.request.urlopen(req)

html = response.read()

soup = BeautifulSoup(html, 'html.parser')
imgs = soup.find_all("img")

i = 0
for img in imgs:
    urlimagem = img["src"]

    urllib.request.urlretrieve(urlimagem, "imagens/img" + str(i) + ".png")

    i += 1


