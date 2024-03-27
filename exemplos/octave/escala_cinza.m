pkg load image;

#Leitura da folha
I = imread("folha.jpg");

#Imagem em escala de cinza
IG = rgb2gray(I);

#Armazena a imagem em escala de cinza
imwrite(IG, "folha_escala_cinza.jpg");

#Mostra a imagem
imshow(IG)