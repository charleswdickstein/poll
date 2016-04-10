import java.util.Stack;
import java.util.StringTokenizer;

public class InfixNotation {
	public static double evaluateInfix(String exp) {
		Stack<String> stack = new Stack<String>();
		int paranCount = 0;
		// double result = 0;
		StringTokenizer tokens = new StringTokenizer(exp, "{}()*/+-", true);
		while (tokens.hasMoreTokens()) {
			String nextToken = tokens.nextToken();

			if (nextToken == "(") {
				stack.push(nextToken);
				paranCount++;

			} else if (nextToken == ")") {
				paranCount--;
				String s = "";
				while (stack.pop() != "(") {
					s = stack.pop() + s;

				}
				stack.push(parseMyString(s));
			} else {
				stack.push(nextToken);
			}
		}

	}

	// Assuming no unary operators
	private static String parseMyString(String s) {
		double leftNum;
		double rightNum;
		double result;
		StringTokenizer tokens = new StringTokenizer(s, "{}()*/+-", true);
		if (tokens.countTokens() != 3) {
			throw new IllegalArgumentException();
		}
		String nextToken = tokens.nextToken();

		
		try {
			leftNum = Double.parseDouble(nextToken);

		} catch (NumberFormatException nfe) {

		}
		String operator = tokens.nextToken();
		try {
			rightNum = Double.parseDouble(nextToken);

		} catch (NumberFormatException nfe) {

		}
		switch (operator) {
		case "+":
			result = leftNum + rightNum;
			return Double.toString(result);
			break;

		case "-":
			result = leftNum - rightNum;
			return Double.toString(result);
			break;
		
		case "*":
			result = leftNum * rightNum;
			return Double.toString(result);
			break;
			
		case "/":
			result = leftNum / rightNum;
			return Double.toString(result);
			break;
			
		default:
			throw new IllegalArgumentException();
			
		}
		throw new IllegalArgumentException();
		
		
	
			

	}

}
