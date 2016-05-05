import java.util.*;
import java.io.*;

public class sorting {
	public static void main (String args[]) throws java.io.IOException {
		
		// Open file and save number to array
		Scanner s = new Scanner(new File("usia.txt"));
		ArrayList<Integer> list = new ArrayList<Integer>();
		while (s.hasNext()){
			if(s.hasNextInt()){
				 list.add(s.nextInt());
			}
		}
		s.close();

		// sorting array
		Collections.sort(list);

		// Print sorted array in a file
		PrintWriter writer = new PrintWriter("usia_urut.txt", "UTF-8");
		for (int i = 0; i < list.size(); i++) {
			int value = list.get(i);
			writer.println(value);
		}
		writer.close();
	}
}
