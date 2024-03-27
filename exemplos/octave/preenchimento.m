pkg load image;

#Leitura da folha
I = imread("imagens/folha.jpg");

#Imagem em escala de cinza
IG = rgb2gray(I);

#Binariza a imagem
IPB = im2bw(IG, 0.9);

#Preenche as lacunas
IBP = 1 - IPB;

#Preenche as lacunas
IBF = imfill(IBP, "holes");

#Armazena a imagem em escala de cinza
imwrite(IBF, "imagens/folha_preenchida.jpg");

#Mostra a imagem
imshow(IBF)