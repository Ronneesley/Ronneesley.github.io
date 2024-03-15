delimiter //

create procedure contarpaises(out qtde int)
begin
	select count(*) into qtde from paises;
end
//
