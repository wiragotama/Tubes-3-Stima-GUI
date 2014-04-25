import java.io.FileWriter;
import java.io.IOException;
import java.io.PrintWriter;

public class a {


public static void main(String[] args) throws IOException {
	//Note the "\\" used in the path of the file instead of "\",
	//this is required to read the path in the String format.
	String testString = String.valueOf(args[0]);
	FileWriter fw = new FileWriter("testwrite.txt");
	PrintWriter pw = new PrintWriter(fw);

	//Write to file line by line
	pw.println("Hello guys");
	pw.println("Java Code Online is testing");
	pw.println("writing to a file operation");
	pw.println(testString);
	
	//Flush the output to the file
	pw.flush();

	//Close the Print Writer
	pw.close();

	//Close the File Writer
	fw.close(); 
	}
}