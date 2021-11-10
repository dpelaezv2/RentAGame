@SCREEN
D = A
@R12
M = D
@10
D = A
@R13
M = D
@draw
0;JMP

(LEERTECLADO)
@KBD
D=M
@132
D = D-A
@moveRight
D;JEQ

@KBD
D=M
@130
D = D-A
@moveLeft
D;JEQ

@LEERTECLADO
0;JMP



(moveRight)
@R12
D = M
M = D + 1
@R11
M = D
@LEERTECLADO
D = A
@R13
M = D
@draw
0;JMP


(moveLeft)
@R12
D = M
M = D - 1
@R11
M = D
@LEERTECLADO
D = A
@R13
M = D
@draw
0;JMP


(draw)
    // put bitmap location value in R12
	// put code return address in R13
	@SCREEN
	D=A
	@R11
	AD=M
	// row 2
	@3968 // A holds val
	D=D+A // D = addr + val
	A=D-A // A=addr + val - val = addr
	M=0 // RAM[addr] = val
	// row 3
	D=A // D holds previous addr
	@32
	AD=D+A
	@6592 // A holds val
	D=D+A // D = addr + val
	A=D-A // A=addr + val - val = addr
	M=0 // RAM[addr] = val
	// row 4
	D=A // D holds previous addr
	@32
	AD=D+A
	@15968 // A holds val
	D=D+A // D = addr + val
	A=D-A // A=addr + val - val = addr
	M=0 // RAM[addr] = val
	// row 5
	D=A // D holds previous addr
	@32
	AD=D+A
	@16176 // A holds val
	D=D+A // D = addr + val
	A=D-A // A=addr + val - val = addr
	M=0// RAM[addr] = val
	// row 6
	D=A // D holds previous addr
	@32
	AD=D+A
	@16304 // A holds val
	D=D+A // D = addr + val
	A=D-A // A=addr + val - val = addr
	M=0 // RAM[addr] = val
	// row 7
	D=A // D holds previous addr
	@32
	AD=D+A
	@16368 // A holds val
	D=D+A // D = addr + val
	A=D-A // A=addr + val - val = addr
	M=0 // RAM[addr] = val
	// row 8
	D=A // D holds previous addr
	@32
	AD=D+A
	@16368 // A holds val
	D=D+A // D = addr + val
	A=D-A // A=addr + val - val = addr
	M=0 // RAM[addr] = val
	// row 9
	D=A // D holds previous addr
	@32
	AD=D+A
	@16352 // A holds val
	D=D+A // D = addr + val
	A=D-A // A=addr + val - val = addr
	M=0 // RAM[addr] = val
	// row 10
	D=A // D holds previous addr
	@32
	AD=D+A
	@8160 // A holds val
	D=D+A // D = addr + val
	A=D-A // A=addr + val - val = addr
	M=0 // RAM[addr] = val
	// row 11
	D=A // D holds previous addr
	@32
	AD=D+A
	@2032 // A holds val
	D=D+A // D = addr + val
	A=D-A // A=addr + val - val = addr
	M=0 // RAM[addr] = val
	// row 12
	D=A // D holds previous addr
	@32
	AD=D+A
	@120 // A holds val
	D=D+A // D = addr + val
	A=D-A // A=addr + val - val = addr
	M=0 // RAM[addr] = val
	// row 13
	D=A // D holds previous addr
	@32
	AD=D+A
	@63 // A holds val
	D=D+A // D = addr + val
	A=D-A // A=addr + val - val = addr
	M=0 // RAM[addr] = val
	// row 14
	D=A // D holds previous addr
	@32
	AD=D+A
	@23 // A holds val
	D=D+A // D = addr + val
	A=D-A // A=addr + val - val = addr
	M=0 // RAM[addr] = val
	// row 15
	D=A // D holds previous addr
	@32
	AD=D+A
	@24 // A holds val
	D=D+A // D = addr + val
	A=D-A // A=addr + val - val = addr
	M=0 // RAM[addr] = val
	// row 16
	D=A // D holds previous addr
	@32
	AD=D+A
	@24 // A holds val
	D=D+A // D = addr + val
	A=D-A // A=addr + val - val = addr
	M=0 // RAM[addr] = val
	


	// put bitmap location value in R12
	// put code return address in R13
	@SCREEN
	D=A
	@R12
	AD=M
	// row 2
	@3968 // A holds val
	D=D+A // D = addr + val
	A=D-A // A=addr + val - val = addr
	M=D-A // RAM[addr] = val
	// row 3
	D=A // D holds previous addr
	@32
	AD=D+A
	@6592 // A holds val
	D=D+A // D = addr + val
	A=D-A // A=addr + val - val = addr
	M=D-A // RAM[addr] = val
	// row 4
	D=A // D holds previous addr
	@32
	AD=D+A
	@15968 // A holds val
	D=D+A // D = addr + val
	A=D-A // A=addr + val - val = addr
	M=D-A // RAM[addr] = val
	// row 5
	D=A // D holds previous addr
	@32
	AD=D+A
	@16176 // A holds val
	D=D+A // D = addr + val
	A=D-A // A=addr + val - val = addr
	M=D-A // RAM[addr] = val
	// row 6
	D=A // D holds previous addr
	@32
	AD=D+A
	@16304 // A holds val
	D=D+A // D = addr + val
	A=D-A // A=addr + val - val = addr
	M=D-A // RAM[addr] = val
	// row 7
	D=A // D holds previous addr
	@32
	AD=D+A
	@16368 // A holds val
	D=D+A // D = addr + val
	A=D-A // A=addr + val - val = addr
	M=D-A // RAM[addr] = val
	// row 8
	D=A // D holds previous addr
	@32
	AD=D+A
	@16368 // A holds val
	D=D+A // D = addr + val
	A=D-A // A=addr + val - val = addr
	M=D-A // RAM[addr] = val
	// row 9
	D=A // D holds previous addr
	@32
	AD=D+A
	@16352 // A holds val
	D=D+A // D = addr + val
	A=D-A // A=addr + val - val = addr
	M=D-A // RAM[addr] = val
	// row 10
	D=A // D holds previous addr
	@32
	AD=D+A
	@8160 // A holds val
	D=D+A // D = addr + val
	A=D-A // A=addr + val - val = addr
	M=D-A // RAM[addr] = val
	// row 11
	D=A // D holds previous addr
	@32
	AD=D+A
	@2032 // A holds val
	D=D+A // D = addr + val
	A=D-A // A=addr + val - val = addr
	M=D-A // RAM[addr] = val
	// row 12
	D=A // D holds previous addr
	@32
	AD=D+A
	@120 // A holds val
	D=D+A // D = addr + val
	A=D-A // A=addr + val - val = addr
	M=D-A // RAM[addr] = val
	// row 13
	D=A // D holds previous addr
	@32
	AD=D+A
	@63 // A holds val
	D=D+A // D = addr + val
	A=D-A // A=addr + val - val = addr
	M=D-A // RAM[addr] = val
	// row 14
	D=A // D holds previous addr
	@32
	AD=D+A
	@23 // A holds val
	D=D+A // D = addr + val
	A=D-A // A=addr + val - val = addr
	M=D-A // RAM[addr] = val
	// row 15
	D=A // D holds previous addr
	@32
	AD=D+A
	@24 // A holds val
	D=D+A // D = addr + val
	A=D-A // A=addr + val - val = addr
	M=D-A // RAM[addr] = val
	// row 16
	D=A // D holds previous addr
	@32
	AD=D+A
	@24 // A holds val
	D=D+A // D = addr + val
	A=D-A // A=addr + val - val = addr
	M=D-A // RAM[addr] = val

    @25000
    D = A
    @count
    M = D 
    (Delay)
    @count
    M = M - 1
    D = M
    @Delay
    D;JGT
	// return
	@R13
	A=M
	D;JMP