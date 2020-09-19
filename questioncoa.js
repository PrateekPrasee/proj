



const quiz = [
    {
        q:'Which of the following addressing modes are suitable for program relocation at run time?<br>1. Absolute addressing<br>2. Base addressing<br>3. Relative addressing<br>4. Indirect addressing',
        options:['1 and 2','1 and 4','1, 2 and 4','2 and 3'],
        answer:3
    },
    {
         q:'The addressing mode/s, which uses the PC instead of a general purpose register is ______',
        options:['relative','direct','indexed with offset','both indexed with offset and direct'],
        answer:0
    },
    {
         q:'The addressing mode, where you directly specify the operand value is _______',
        options:['Direct','Immediate','Register','Implicit'],
        answer:1
    },
    {
         q:'The memory unit of computer has 1024 K words of 32 bits each. It has an instruction format with 3 fields:<br>Opcode, Mode to specify one of 8 available modes and a memory address to specify memory location. Specify the no. of bits in each field of instruction if the instruction is in one memory word.',
         options:['Opcode-9,Mode-3, address-20','Opcode-10,Mode-5, address-20','Opcode-8,Mode-4, address-20','Opcode-7,MOde-3, address-18'],
         answer: 0
    },
    {
         q:'Which addressing mode is used for accessing data stored in an array in memory?',
        options:['Base','Register','Index','Relative'],
        answer:2
    },
    {
         q:'If the PC holds value 300 and Register holds the 600. What will be the effective address in the case of Register indirect and Auto decrement?',
        options:['300, 599','300, 600','600, 601','600, 599'],
        answer:3
    },
    {
        q:'INCA is which type of instruction?',
        options:['zero address instruction','Single accumulator instruction','one address instruction','Two address instruction'],
        answer:2
    },
    {
        q:'What must be the address field of an indexed addressing mode instruction be to make it the same as a register indirect mode instruction( it uses Index register only for indirect mode)',
        options:['2','0','1','5'],
        answer:1
    },
    
    {
         q:'Which addressing mode execute its instructions within CPU without the necessity of reference memory for operands?',
         options:['Auto increment','Immediate','Direct','Register'],
         answer:3
    },
    {
        q:'The instructions based on the stack operations are also known as "zero address" or "implied instructions", because _______.',
        options:['processor can refer a memory stack without specifying the address','none of these','address doesnot get updated automatically in stack pointer','address gets updated manually in stack pointer'],
        answer:0
    },
    
    {
        q:'A three input NOR gate gives logic high output only when',
        options:['all inputs are low','all inputs are high','at least one input is high','at least two input is low'],
        answer:0
    },
    
    {
        q:'In computers, subtraction is generally carried out by',
        options:['1s complement','2s complement','10s complement','9s complement'],
        answer:1
    },
    
    {
        q:'n bits in operation code imply that there are ___________ possible distinct operators',
        options:['2^n','2n','log n','n/2'],
        answer:0
    },
    
    {
        q:'In Reverse Polish notation, expression A*B+C*D is written as',
        options:['A*BCD*+','AB*CD+*','AB*CD*+','A*B*CD+'],
        answer:2
    },
    
    {
        q:'A computer system has 248 instructions then how many bits will be required in the opcode field',
        options:['7','11','9','8'],
        answer:3
    }

]