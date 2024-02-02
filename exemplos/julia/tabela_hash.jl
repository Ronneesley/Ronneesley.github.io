julia> mapa = Dict("roni" => 8, "ana" => 10, "bob" => 3)
Dict{String, Int64} with 3 entries:
  "ana"  => 10
  "bob"  => 3
  "roni" => 8

julia> mapa["pedro"] = 9
9

julia> mapa
Dict{String, Int64} with 4 entries:
  "ana"   => 10
  "pedro" => 9
  "bob"   => 3
  "roni"  => 8
