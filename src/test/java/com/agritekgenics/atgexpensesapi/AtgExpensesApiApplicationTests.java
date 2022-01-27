package com.agritekgenics.atgexpensesapi;

import static org.junit.jupiter.api.Assertions.assertEquals;

import org.junit.jupiter.api.DisplayName;
import org.junit.jupiter.api.Test;
import org.junit.jupiter.params.ParameterizedTest;
import org.junit.jupiter.params.provider.CsvSource;


class AtgExpensesApiApplicationTests {
	
	@Test
	@DisplayName("Addition of 2 Numbers")
	void addTwoNumbers(){
		int a = 4;
		int b = 5;
		Calculator calc = new Calculator();
		assertEquals(9, calc.add(a, b), "4 + 5 should equal 9");
	}

	@ParameterizedTest(name = "{0} + {1} = {2}")
	@CsvSource({
		"0,    1,   1",
		"1,    2,   3",
		"49,  51, 100",
		"1,  100, 101"
	})
	void add(int first, int second, int expectedResult){
		Calculator calc = new Calculator(); 
		assertEquals(expectedResult, calc.add(first, second),
						() -> first + " + " + second + " should equal " + expectedResult);
	}
}
