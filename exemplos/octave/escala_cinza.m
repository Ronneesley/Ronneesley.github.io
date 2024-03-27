pkg load image;

#Leitura da folha
I = imread("imagens/folha.jpg");

#Imagem em escala de cinza
IG = rgb2gray(I);

#Armazena a imagem em escala de cinza
imwrite(IG, "imagens/folha_escala_cinza.jpg");

#Mostra a imagem
imshow(IG)