pkg load image;

#Leitura da folha
I = imread("imagens/folha.jpg");

#Imagem em escala de cinza
IG = rgb2gray(I);

#Binariza a imagem
IPB = im2bw(IG, 0.9);

#Preenche as lacunas
IBP = 1 - IPB;

#Armazena a imagem em escala de cinza
imwrite(IPB, "imagens/folha_inversao_pb.jpg");
imwrite(IBP, "imagens/folha_inversao_bp.jpg");

#Mostra a imagem
imshow(IPB)
imshow(IBP)